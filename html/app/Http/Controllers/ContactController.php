<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' =>'required|min:2',
            'tel' =>'required|regex:/^(?:(?:\+?[0-9]{2,4})?[ ]?[6789][0-9 ]{8,13})$/',
            'email' => 'required|email',
            'message' =>'required|min:10'

        ]);

        $correo = new ContactMailable($request->all());
        Mail::to('dlopezg4@gmail.com')->send($correo);

        return redirect()->route('home')->with('info',__('messages.sent'));
    }

    
}
