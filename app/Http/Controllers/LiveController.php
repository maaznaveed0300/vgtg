<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Mail;

class LiveController extends Controller
{
    //
    public function live(){
        return view('live_event');
    }

    public function bookartist(Request $req){
        $data =[
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'date'=>$req->date,
            'time'=>$req->time,
    ];
    Mail::to('aali54658@gmail.com')->send(new BookingMail($data));
    return back()->with('message_sent','Your message has been sent');
    }
}
