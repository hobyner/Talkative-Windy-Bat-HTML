<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('landing');
})->name('landing');

Route::get('/invest', function () {
    return view('invest');
})->name('invest');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/forgot', function () {
    return view('users.forgot');
})->name('forgot')->middleware('guest');

//Route::get('/reset', function () {
//    return view('users.reset');
//})->name('reset_password');

Route::post('/forgot', [AuthController::class, 'forgot_password'])->name('forgot_password')->middleware('guest');

Route::get('/messages', function () {
    return view('users.messages');
})->name('messages')->middleware('auth');

Route::get('/entrepreneur-faqs', function () {
    return view('entrepreneur_faqs');
})->name('entrepreneur_faqs');

Route::get('/investor-faqs', function () {
    return view('investor_faqs');
})->name('investor_faqs');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/profile', function () {
    return view('users.profile');
})->name('profile')->middleware('auth');

Route::get('/wallet', [UserController::class, 'showWallet'])->name('wallet')->middleware('auth');



Route::get('/signup',  [AuthController::class, 'create'])->name('signup')->middleware('guest');

Route::post('/users', [AuthController::class, 'store'])->name('users');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::get('/verify/{token}', [AuthController::class, 'verify'])->name('verify');

Route::get('/reset/{token}', [AuthController::class, 'reset'])->name('reset');
Route::post('/reset/{token}', [AuthController::class, 'change_password'])->name('change_password');

Route::post('/users/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::post('/change-user-password', [AuthController::class, 'change_user_password'])->name('change_user_password');

Route::post('/deposit', [UserController::class, 'deposit'])->name('deposit')->middleware('auth');

Route::post('/transfer', [UserController::class, 'transfer'])->name('transfer')->middleware('auth');
