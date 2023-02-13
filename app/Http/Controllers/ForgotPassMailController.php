<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassMail;
use App\Models\ForgotPass;
use Illuminate\Http\Request;
// use Mail;
use Illuminate\Support\Facades\Mail;

class ForgotPassMailController extends Controller
{
    public function sendForgotPassMail(Request $request)
    {

        if ($request->isMethod('post')) {

            $data = [
                'email' => $request->email,
            ];
            Mail::to($request->email)->send(new ForgotPassMail($data));
            return view('notify-password')->with('email', $request->email);
            // ForgotPass::create([
            //     'email' => $request -> email,
            //     'temp_pass' => fake() -> password()
            // ]);
        } else {
            return redirect()->route('login');
        }
    }
}
