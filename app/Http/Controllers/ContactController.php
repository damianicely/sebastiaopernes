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
        Mail::raw(request('message'), function($message){
            $message->to(request('email'))->subject(request('name'));
        });
        return redirect()->route('contact')
        ->with('success',"Thank you for your message");
    }
}
