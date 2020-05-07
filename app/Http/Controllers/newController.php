<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;

class newController extends Controller
{
    public function welcome() 
    {
        $news = post::orderBy('id' , 'desc')->paginate('5');
        $links = $news->links('');
        return view('welcome' , compact('news' , 'links'));
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

