<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        $body="Email: ".request('email')."
Message: ".request('message');


        Mail::raw($body, function($message){
            $message->to('photographia@protonmail.com')->subject(request('name'));
        });
        return redirect()->route('contact')
        ->with('success',"Thank you for your message");
    }
}
