<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\FeedbackHandler;
use Illuminate\Support\Facades\Date;
use Yajra\DataTables\Facades\DataTables;

class GuestController extends Controller
{
    use FeedbackHandler;
    public function index()
    {
        return view('admin.guests.index');
    }

    public function batam()
    {
        $model = Guest::where('created_at', '<', Date::create(2023, 02, 24));
        return DataTables::of($model)
            ->addIndexColumn()
            ->setRowId('id')
            ->toJson();
    }

    public function jogja()
    {
        $model = Guest::whereBetween('created_at', [
            Date::create(2023,02,24),
            Date::create(2023,02,26)
        ]);
        return DataTables::of($model)
            ->addIndexColumn()
            ->setRowId('id')
            ->toJson();
    }

    public function store(Request $request)
    {
        $request->validate([
            'event' => 'required',
            'url' => 'required',
            'name' => 'required',
            'email' => 'required',
            'business' => 'required',
            'contact' => 'required',
        ]);

        $guest = new Guest;
        try {

            $guest->create([
                'event_id' => $request->input('event_id'),
                'url' => $request->input('url'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'business' => $request->input('business'),
                'contact' => $request->input('contact'),
            ]);

            // Get the file content
            $fileContent = file_get_contents(storage_path("app/public" . $request->url));

            // Generate the JSON response
            $ob = $this->gd($guest);

            // Send both the file download and the JSON response
            return response($fileContent)
                ->header('Content-Type', 'application/zip')
                ->header('Content-Disposition', "attachment; filename='$request->file'")
                ->json($ob);
        } catch (\Throwable $th) {
            $ob = $this->err($guest, $th);
            return response()->json($ob);
        }
    }
}
