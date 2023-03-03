<?php
session_start();


use App\Http\Controllers\CreateNewPasswordController;
use App\Http\Controllers\ForgotPassMailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyAccountMailController;
use App\Models\User;
use App\Models\UserChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\UserBusiness;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Cache;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Intervention\Image\Facades\Image;
use PhpParser\Node\NullableType;
use Symfony\Component\HttpFoundation\File\UploadedFile;





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
    session_unset();

    // Set the Cloudinary API credentials

    // Check if the images are cached
    return view('home');
});

Route::any('/gpay.com/dash', function (Request $request) {
    if ($request->isMethod('post')) {
        $user = User::where('email', $request->email)->first();



        if ($user && Hash::check($request->password, $user->password)) {
            $_SESSION["user_id"] =  $user->id;
            return redirect()->route('dashboard');
        } else {
            return Redirect::back()->withErrors(
                [
                    'login' => 'Invalid credentials!',
                    'email' => $request->email
                ]
            );
        }
    } else {
        return redirect()->route('login');
    }
});


Route::redirect('/', '/gpay.com');
Route::view('/gpay.com/forgot-password/', 'forgot-pass');
Route::view('/gpay.com/forgot-pass-show/', 'emails.forgot');
Route::view('/gpay.com/verify-account-show/', 'emails.verify-account');
Route::view('/gpay.com/account-verification', 'notify-accept-account');


Route::get('/gpay.com/create-new-pass/{email}', [CreateNewPasswordController::class, 'create_new_pass']);
Route::view('/gpay.com/notify-password/', 'notify-password')->name('notify-password');

Route::any('/gpay.com/forgot-pass-request', [ForgotPassMailController::class, 'sendForgotPassMail']);
Route::post('/gpay.com/set-password', function (Request $request) {
    $user = User::where('email', $request->email);
    $user->update(['password' => Hash::make($request->pass)]);

    return redirect()->route('login');
    //    ->with('password_notification', 'Password successfully updated!');
});

Route::view('/gpay.com/sign-up/profile-info', 'sign_up_profile_info')->name('sign_up_profile_info');
Route::any('/gpay.com/sign-up/about-business', function (Request $request) {
    if ($request->isMethod('post')) {
        return view('sign_up_about_business');
    } else {
        // return redirect()->route('login');


    }
});

Route::any('/gpay.com/sign-up/account-process', function (Request $request) {
    if ($request->isMethod('post')) {

        User::create([
            'name' => $_COOKIE["f_name"] . ' ' . $_COOKIE["l_name"],
            'email' =>  $_COOKIE["email"],
            'password' => Hash::make($_COOKIE["password"]),
            'phone' => $_COOKIE["phone"],
            'location' => $_COOKIE["location"],
            'verified' => 'done'
        ]);

        $user_id =  User::where('email',  $_COOKIE["email"])->first()->id;

        UserBusiness::create([
            'company_name' =>  $_COOKIE["company_name"],
            'company_do' =>  $_COOKIE["company_do"],
            'describe_business' =>  $_COOKIE["describe_business"],
            'currency' =>  $_COOKIE["currency"],
            'estimate_revenue' =>  $_COOKIE["estimate_revenue"],
            'long_service' =>  $_COOKIE["long_service"],
            'current_bill' =>  $_COOKIE["current_bill"],
            'customized' =>  $_COOKIE["customized"],
            'user_id' => $user_id
        ]);
        return redirect()->route('login');
    } else {
        return redirect()->route('login');
    }
});

Route::any('/gpay.com/verify-account/', [VerifyAccountMailController::class, 'sendVerifyAccMail']);

Route::view('/gpay.com/login/', 'login')->name('login');

Route::view('/gpay.com/pricing/', 'pricing');
Route::view('/gpay.com/demo/', 'demo');
Route::view('/gpay.com/test/', 'test');



Route::resource('user', UserController::class);
//dashboard
Route::get('/gpay.com/dashboard/', function () {
    $user_id = null;
    try {
        $user_id_temp = $_SESSION["user_id"];
        $user_id = $user_id_temp;
    } catch (Exception $e) {
        return redirect()->route('login');
    }


    return view('dashboard.dash', [
        'image' => User::where('id', $user_id)->first()->image,
        'user_id' => $user_id,

    ]);
})->name('dashboard');
//dashboard messages
Route::get('/gpay.com/messages/', function () {


    $user_id = null;
    try {
        $user_id_temp = $_SESSION["user_id"];
        $user_id = $user_id_temp;
    } catch (Exception $e) {
        return redirect()->route('login');
    }

    $array = Cache::remember('all_data', 1, function () {

        $image_urls = array();
        $data = UserChat::all();
        foreach ($data as $datum) {
            if ($datum->first_user == $_SESSION["user_id"]  && $datum->second_user != $_SESSION["user_id"]) {
                array_push($image_urls, $datum->second_user);
            } else if ($datum->first_user != $_SESSION["user_id"] && $datum->second_user == $_SESSION["user_id"]) {
                array_push($image_urls, $datum->first_user);
            }
        }
        return $image_urls;
    });



    $message_id = null;
    if (count(array_unique($array)) == 0) {
        $message_id = 0;
    } else {
        $message_id  = array_unique($array)[0];
    }

    $image_user = Cache::remember('image_user', 1, function () {
        return User::where('id', $_SESSION["user_id"])->first()->image;
    });

    return view('dashboard.messages', [
        'image' => $image_user,
        'chats' => array_unique($array),
        'message_id' => $message_id,
        'user_id' => $user_id,

    ]);
})->name('message');

Route::get('/gpay.com/messages/{id}', function ($id) {
    $user_id = null;
    try {
        $user_id_temp = $_SESSION["user_id"];
        $user_id = $user_id_temp;
    } catch (Exception $e) {
        return redirect()->route('login');
    }

    $array = array();
    $data = UserChat::orderBy('created_at', 'desc')->get();
    foreach ($data as $datum) {
        if ($datum->first_user == $user_id) {
            array_push($array, $datum->second_user);
        } else if ($datum->second_user == $user_id) {
            array_push($array, $datum->first_user);
        } else {
            array_push($array, $id);
        }
    }
    return view('dashboard.messages', [
        'image' => User::where('id', $user_id)->first()->image,
        'chats' => array_unique($array),
        'message_id' => $id,
        'user_id' => $user_id

    ]);
});
Route::post('/gpay.com/messages/send/request', function (Request $request) {
    //    dd($request->all());
    UserChat::create([
        'first_user' => $request->first_user,
        'second_user' => $request->second_user,
        'message' => $request->message
    ]);
});
Route::get('/gpay.com/profile/', function () {
    $user_id = null;
    try {
        $user_id_temp = $_SESSION["user_id"];
        $user_id = $user_id_temp;
    } catch (Exception $e) {
        return redirect()->route('login');
    }


    return view('dashboard.profile', [
        'user' => User::where('id', $user_id)->first(),
        'image' => User::where('id', $user_id)->first()->image,
        'user_id' => $user_id,
        'u_buss' => UserBusiness::where('id', $user_id) ->first()

    ]);
})->name('profile');
//sign in with google
Route::get('/gpay.com/login/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/gpay.com/login/auth/callback', function () {
    $user = Socialite::driver('google')->user();
    $user_id = null;
    if (User::where('email', $user->getEmail())->first() == null) {
        // "no account yet";
        $image_data = file_get_contents($user->getAvatar());

        User::create([
            'name' => $user->getName(),
            'email' =>  $user->getEmail(),
            'password' => '',
            'phone' => '',
            'location' => '',
            'image' => $image_data,
            'verified' => 'done'
        ]);

        $user_id =  User::where('email',  $user->getEmail())->first()->id;

        UserBusiness::create([
            'company_name' => '',
            'company_do' =>  '',
            'describe_business' => '',
            'currency' =>  '',
            'estimate_revenue' =>  '',
            'long_service' =>  '',
            'current_bill' =>  '',
            'customized' =>  '',
            'user_id' => $user_id
        ]);
        $_SESSION["user_id"] = $user_id;
    } else {
        // "has an account already";
        $user_id =  User::where('email',  $user->getEmail())->first()->id;
        $user_image_id =  User::where('email',  $user->getEmail())->first()->image;

        $image_data = file_get_contents($user->getAvatar());

        User::where('id', $user_id)->update([
            'name' => $user->getName(),
            'image' => $image_data
        ]);

        $_SESSION["user_id"] = $user_id;
    }


    return redirect()->route('dashboard');

    // dd($user);
});

Route::get('/gpay.com/upload', function () {
    return view('upload');
});

Route::post('/gpay.com/upload/post', function (Request $request) {
    $user_id = null;
    try {
        $user_id_temp = $_SESSION["user_id"];
        $user_id = $user_id_temp;
    } catch (Exception $e) {
        return redirect()->route('login');
    }

    try {
        // Retrieve the uploaded image
        $image = $request->file('image');
        $id = $user_id;
        // Check if the image size is less than or equal to 20kb
        if (!$image) {
            return Redirect::back()->withErrors([
                'img_err' => 'No image found!',
            ]);
        } else if ($image->getSize() > 20000) {
            // Compress the image using TinyPNG API
            $api_key = env('TINYPNG_API_KEY');
            $client = new \GuzzleHttp\Client();
            $response = $client->post('https://api.tinify.com/shrink', [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode('api:' . $api_key),
                ],
                'body' => file_get_contents($image->getPathname()),
            ]);

            $compressed_data = json_decode((string) $response->getBody());
            $compressed_url = $compressed_data->output->url;

            // Download the compressed image and save it to the database

            $compressed_image_data = file_get_contents($compressed_url);
            User::where('id', $id)->update([
                'image' => $compressed_image_data,
            ]);
        } else {
            // Save the original image
            $image_data = file_get_contents($image->getPathname());
            User::where('id', $id)->update([
                'image' => $image_data,
            ]);
        }

        // Redirect to a success page
        return Redirect::back();
    } catch (Exception $err) {
        return Redirect::back()->withErrors([
            'img_err' => 'There is an error!',
        ]);
        
    }
});
