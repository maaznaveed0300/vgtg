<?php

namespace App\Http\Controllers;
use App\Mail\ForMail;
use App\Mail\ContactMail;
use Mail;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function event(){
        return view('request_event');
    }

    public function Submission(Request $request)
    {
        # code...
        $detail =[
            'name'=> $request->name,
            'email' => $request->email,
            'phone'=> $request->phone,
            'date'=>$request->date,
            'city'=>$request->city,
            'country' => $request->country,
            'timezone'=> $request->timezone,

            'artist_request'=> $request->artist_request,

            'eve_request'=> $request->eve_request,
            'spec_req'=>$request->spec_req,
            'aud_event' => $request->aud_event,
            'aud_exp'=>$request->aud_exp,
            'gen_exp'=>$request->gen_exp,
            'aud_city' => $request->aud_city,
            'aud_country'=> $request->aud_country,
            'aud_time'=>$request->aud_time,
            'priv_eve'=>$request->priv_eve,
            'ticket'=>$request->ticket,


        ];
        Mail::to('aali54658@gmail.com')->send(new ForMail($detail));
        return back()->with('message_sent','Your message has been sent');

    }
    public function contactForm(Request $req){
        // dd($req);
        $data =[
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message
    ];
    Mail::to('aali54658@gmail.com')->send(new ContactMail($data));
    return back()->with('message_sent','Your message has been sent');

    }
}
