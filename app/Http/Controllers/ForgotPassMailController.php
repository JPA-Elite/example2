<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassMail;
use App\Models\ForgotPass;
use Illuminate\Http\Request;
// use Mail;
use Illuminate\Support\Facades\Mail;

class ForgotPassMailController extends Controller
{
    public function sendForgotPassMail(Request $request){

        $data = [
            'email' => $request->email,
        ];

        Mail::to($request -> email)->send(new ForgotPassMail($data));
        return redirect()->route('notify-password');
        // ForgotPass::create([
        //     'email' => $request -> email,
        //     'temp_pass' => fake() -> password()
        // ]);


    }


}
