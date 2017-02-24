<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Mail;
use Session;

class PagesController extends Controller {

    public function getIndex() {
      $posts = Post::orderBy('created_at' ,'desc')->limit(4)->get();
      return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        $first = 'John';
        $last = 'Fletcher';

        $fullname =  $first . " " . $last;
        $email = 'Derp@hderp.com';
        $data = [];
        $data['email'] =  $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(Request $request){

        $this->validate($request,[
            'subject' => 'min:3|max:255',
            'email'=> 'required|email',
            'message' => 'min:10'
        ]);
        $data=[
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        ];
        Mail::send('emails.contact',$data, function ($message) use ($data){
            $message->from($data['email']);
            $message->to('derp@derp.com');
            $message->subject($data['subject']);
        });
        Session::flash('success','Mail sent');
        return redirect()->route('page.index');
    }

}
