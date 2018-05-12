<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendeeController extends Controller
{
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
