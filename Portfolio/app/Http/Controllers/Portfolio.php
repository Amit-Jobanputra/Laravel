<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portfolio extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function skill()
    {
        return view('skills');
    }   
    public function work()
    {
        return view('work');
    }
}
