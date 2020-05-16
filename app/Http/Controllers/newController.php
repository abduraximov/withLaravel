<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Services\SendTelegramService;

use App\Feedback;

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

    

    public function more($id)
    {
        $post = Post::findOrFail($id);

        return view('more', [
            'post'=>$post
            
        ]);
        

    }
    public function contact()
    {
        return view('contact');
    }

    public function feedbackStore(Request $request)
    {
       $request->validate([

        'name' => 'required|min:3|max:100',
        'surname' => 'required|min:3|max:120',
        'email' => 'required|email',
        'subject' => 'required|min:10|max:128',
        'message' => 'required|max:2048'
       ]);
       
       Feedback::create([
          'name' => $request->post('name'),
          'surname' => $request->post('surname'),
          'email' => $request->post('email'),
          'subject' => $request->post('subject'),
          'message' => $request->post('message')
       ]);

       return redirect()
       ->route('contact')
       ->with('success', 'xabaringiz yuborildi tez orada javob yozamiz !');
    }




    public function makeAppointment(Request $request)
    {
        $data = $request->validate([
          'ism' => 'required|min:1',
          'fam' => 'required|min:1',   
          'e-mail' => 'required|min:1',
          'subject' => 'required|min:1',
          'more' => 'required|min:1'       
        ]);

        dd($data);
        //formatting
        // $message = 'Ismi: '.$data['ism'].PHP_EOL;
        // $message = 'familyasi: '.$data['fam'];
       
        // SendTelegramService::send($message);

        // return redirect()
        // ->route('contact')
        // ->with('success', 'xabaringiz yuborildi tez orada javob yozamiz !');
        
    }
}

