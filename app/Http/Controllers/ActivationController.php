<?php

namespace App\Http\Controllers;

use App\Activation;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($token)
    {
        Activation::complete($token);

        return redirect()->route('home');
    }
}
