<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class newController extends Controller
{
    public function welcome() 
    {
         $posts = post::orderBy('id' , 'desc')->paginate('5');
         $links = $posts->links();
        return view('welcome',compact('posts' , 'links'));
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

    public function more($id)
    {
        $post = Post::findOrFail($id);

        return view('more', [
            'post'=>$post
            
        ]);

    }
}

