<?php

// use App\Enums\Provider;
// use App\Http\Controllers\SocialiteController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 

// Route::controller(SocialiteController::class)->group(function () {
//     // Route::get('auth/redirect', 'redirect');
//     Route::get('auth/{provider}/callback', 'authenticate');
// });
Route::get('/auth/redirect-github', function () {
   
    return Socialite::driver('github')->redirect();
});
Route::get('/auth/redirect-twitter', function () {
   
    return Socialite::driver('twitter')->redirect();
});
Route::get('auth/redirect-facebook', function () {
   
    return Socialite::driver('facebook')->redirect();
});
// Route::get('/oauth/redirect', function () {
//     return Socialite::driver($provider->value)->redirect();
// });
 //github
Route::get('auth/callback-github', function () {
    $githubUser  = Socialite::driver('github');
    dd($githubUser->user());
    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/dashboard');
 
    // $user->token
});
//facebook
Route::get('auth/callback-facebook', function () {
    $githubUser  = Socialite::driver('facebook')->user();
    dd($githubUser);
    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/dashboard');
 
    // $user->token
});
//twitter
Route::get('/auth/callback-twitter', function () {
    $githubUser  = Socialite::driver('twitter')->user();
    dd($githubUser);
    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    return redirect('/dashboard');
 
    // $user->token
});