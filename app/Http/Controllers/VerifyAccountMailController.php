<?php

namespace App\Http\Controllers;

use App\Mail\VerifyAccountMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerifyAccountMailController extends Controller
{
    public function sendVerifyAccMail(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = [
                'email' => $_COOKIE["email"],
            ];
            Mail::to($_COOKIE["email"])->send(new VerifyAccountMail($data));
            return view('notify-verify-account')->with('email', $_COOKIE["email"]);
        } else {
            return redirect()->route('login');
        }
    }
}
