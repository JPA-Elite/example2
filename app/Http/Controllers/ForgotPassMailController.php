<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassMail;
use Illuminate\Http\Request;
use Mail;

class ForgotPassMailController extends Controller
{
    public function sendForgotPassMail(Request $request){

        $data = [
            'email' => $request->email,
        ];

        Mail::to($request -> email)->send(new ForgotPassMail($data));
        
    }
}
