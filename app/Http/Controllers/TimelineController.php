<?php

namespace Tweeter\Http\Controllers;

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
