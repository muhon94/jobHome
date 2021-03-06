<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function job_details()
    {
        return view('job_details');
    }

    public function about_us()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
