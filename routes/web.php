<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/', function(){
    return view('home')->with([
        'users' => User::all()
    ]);
});
// Route::view('/', 'home');
Route::view('/gpay.com/homepage/', 'home');
Route::view('/gpay.com/about_us/', 'about');
Route::view('/gpay.com/pricing/', 'pricing');
Route::view('/gpay.com/demo/', 'demo');

Route::resource('user',UserController::class);
