<?php

namespace App\Http\Controllers;

use App\Event;
use App\Item;
use ReflectionClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'ASC')->get();
        
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEvent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|unique:events,url',
        ]);

        $name = $request->input('name');
        $url = $request->input('url');

        $qrcode = "http://imv.co.id/s/" . $url;

        $events = Event::create([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'qrcode' => $qrcode,

        ]);

        return redirect()->route('event.index')->with('success', 'Success !');
    }
    
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'banner' => 'required|file'
        ]);
        $event = new Event();
        try {
            $banner = $request->file('banner');
            $disk = Storage::disk('public');
            $filePath = 'banner';// the path to store the file
            $fileName = $banner->getClientOriginalName(); // the new name for the file

            // Check if the directory exists in storage
            if (!$disk->exists(dirname($filePath))) {
                // Create the directory if it doesn't exist
                $disk->makeDirectory(dirname($filePath));
            }

            // Store the file with the new name
            $banner->storeAs(Storage::url($filePath)->disk('public'), $fileName);
            
            // Generate QR
            $url = $request->url;
            $url = "https://imv.co.id/s/" . $url;
            $qr = base64_encode(QrCode::format('png')
                ->merge(storage_path('app/public/logo/favicon2.png'), .2, true)
                ->margin(1)->generate($url));

            // Save to DB
            $event->name = $request->name;
            $event->qrcode = $qr;

            $event->save();

            $ob = $this->gd($event, 'tambah');
            return redirect()->route('event.index')->with($ob->status, json_encode($ob));
        } catch (\Throwable $th) {
            $ob = $this->err($event, $th);
            return redirect()->route('event.index')->with($ob->status, json_encode($ob));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'desc' => 'required',
        ]);

        try {
            if ($event->url !== $request->url) {
                // Generate QR
                $url = $request->url;
                $url = "https://imv.co.id/s/" . $url;
                $qr = base64_encode(QrCode::format('png')
                    ->merge(storage_path('app/public/logo/favicon2.png'), .2, true)
                    ->margin(1)->generate($url));
                // Replace old QR , regenerate new QR
                $event->url = $request->url;
                $event->qrcode = $qr;
            }
            // Save to DB
            $event->name = $request->name;
            $event->desc = $request->desc;

            $event->save();

            $ob = $this->gd($event, 'tambah');
            return redirect()->route('event.index')->with($ob->status, json_encode($ob));
        } catch (\Throwable $th) {
            $ob = $this->err($event, $th);
            return redirect()->route('event.index')->with($ob->status, json_encode($ob));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function short($url)
    {
        $id = Event::select('id')
            ->where('url', '=', $url)
            ->value('id');

        return redirect("/event/" . $url . "_" . $id);
    }

    public function event($url, $id)
    {
        $event = Event::findOrFail($id);
        return view('home.showevent', compact('event', 'url', 'id'));
    }

    public function events()
    {
        $events = Event::all();
        return view('home.events', compact('events'));
    }

    public function generate(Request $request)
    {
        $url = "amd-jogja-1";
        $url = "https://imv.co.id/s/" . $url;
        $size = $request->size;
        //Storage::disk('public')->get('logo/favicon2.png')
        // public_path('/assets/imv/assets/img/logo/rainer white.png')
        $qr = base64_encode(QrCode::format('png')
            ->merge(storage_path('app/public/logo/favicon2.png'), .2, true)
            ->margin(0)
            ->size($size)->generate($url));
        // return $qr;
        $img = "<img src='data:image/png;base64," . $qr . "'>";
        return $img;
    }
}
