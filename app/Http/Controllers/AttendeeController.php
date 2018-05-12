<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::allFiles(resource_path('views/attendees'));

        $attendees = collect($files)->mapWithKeys(function ($file) {
            $filename = $file->getRelativePathname();
            $name = basename($filename, '.blade.php');
            $attendeeName = ucwords(str_replace('-', ' ', $name));

            return [
                $attendeeName => route('attendees.show', $name)
            ];
        })->reject(function ($attendee) {
            return str_contains($attendee, 'index');
        });

        return view('attendees.index', compact('attendees'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        return view('attendees.'.$name);
    }
}
