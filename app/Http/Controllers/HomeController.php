<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Traits\FeedbackHandler;
use Mailgun\Mailgun;
use Mailgun\Exception;
use Illuminate\Http\Request;
use ReflectionClass;

class HomeController extends Controller
{
    use FeedbackHandler;

    public function index()
    {
        return view('home.index');
    }

    public function events()
    {
        return view('home.events');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function sendMail(Request $request)
    {
        $subject = $request->subject . "  From " . $request->email . " , " . $request->name;
        $mail = $request->email;
        $name = $request->name;
        $msg = "From $mail , $name.

        
        $request->message";
        $mgClient = Mailgun::create(env('MAILGUN_APIKEY'), env('MAILGUN_URL'));
        $domain = env('MAILGUN_DOMAIN');

        if ($request->inquiry == 3) {
            $recemail = 'support@imv.co,id';
            $receiver = 'Support';
        } else {
            $recemail = 'sales@imv.co.id';
            $receiver = 'Sales';
        }
        try {
            $data = [
                'subject' => $subject,
                'mail' => $mail,
                'name' => $name,
                'recemail' => $recemail,
                'receiver' => $receiver
            ];
            $mgClient->messages()->send($domain, [
                'from' => $data['mail'],
                'to' => $data['recemail'],
                'subject' => $subject,
                'text' => $msg
            ]);
            // Mail::raw( $msg, function ($message) {
            //     $message->sender($this->data['mail'], $this->data['name']);
            //     $message->to('dwianjar@imv.co.id', 'Andar');
            //     $message->replyTo('dwianjar@imv.co.id', 'Andar');
            //     $message->subject($this->data['subject']);
            //     $message->priority(3);
            // $message->attach('pathToFile');
            // });
            $content = [
                'stat' => 'success',
                'message' => 'E-mail sent!'
            ];
            return response()->json($content, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function guest(Request $request)
    {
        // dd($request);
        $request->validate([
            'event' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'business' => 'required',
            'contact' => 'required|digits_between:9,14',
        ]);

        $guest = new Guest;
        try {
            $guest->create([
                'event_id' => $request->input('event'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'business' => $request->input('business'),
                'contact' => $request->input('contact'),
            ]);

            // Get the file content;
            // Generate the JSON response
            $ob = $this->gd($guest, null, "Terima kasih telah berpartisipasi !");

            // Send both the file download and the JSON response
            // $response = ;
            return response()->json($ob, 200);
        } catch (\Throwable $th) {
            $ob = $this->err($guest, $th);
            return response()->json($ob);
        }
    }
}
