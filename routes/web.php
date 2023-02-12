<?php

use App\Http\Controllers\ForgotPassMailController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Page

Route::redirect('/', '/gpay.com');

Route::get('/gpay.com', function () {
    return view('home');
    // ->with([
    //     'users' => User::all()
    // ]);
});

Route::post('/gpay.com/dash', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        return response(
            [
                'message' => "successfully login",
                'email' => $request->email,
                'password' => $request->password
            ]
        );
    } else {
        return Redirect::back()->withErrors(
            [
                'login' => 'Invalid credentials!',
                'email' => $request->email
            ]
        );
    }
});


Route::redirect('/', '/gpay.com');
Route::view('/gpay.com/forgot-password/', 'forgot-pass');

Route::post('/gpay.com/forgot-pass-request',[ForgotPassMailController::class, 'sendForgotPassMail']);

Route::view('/gpay.com/login/', 'login');

Route::view('/gpay.com/pricing/', 'pricing');
Route::view('/gpay.com/demo/', 'demo');

Route::resource('user', UserController::class);
