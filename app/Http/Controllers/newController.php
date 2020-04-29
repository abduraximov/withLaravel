<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function welcome() 
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function price()
    {
        return view('price');
    }

    public function service()
    {
        return view('service');
    }

    public function work()
    {
        return view('work');
    }
    public function example()
    {
        return view('example');
    }

    public function contact()
    {
        return view('contact');
    }
}

