<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
    
         $msg = request()->validate([
             'name' => 'required',
             'email' => 'required|email', 
             'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        
        Mail::to('gustavomontesinos6@gmail.com')->queue(new MessageReceived($msg));
        
        return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
