<?php

namespace Tweeter\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timeline');
    }
}
