<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreateNewPasswordController extends Controller
{
    public function create_new_pass($email){
        return view("create-new-pass")->with('email', $email);
    }


}
