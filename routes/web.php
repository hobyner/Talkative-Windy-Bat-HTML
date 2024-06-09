<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

//Route::get('/invest', function () {
//    return view('invest');
//})->name('invest');

Route::get('/invest', [UserController::class, 'getAllPitches'])->name('invest')->middleware('auth');

Route::get('/pitch', function () {
    return view('pitch');
})->name('pitch')->middleware('auth');

Route::post('/pitch', [UserController::class, 'addPitch'])->name('pitch')->middleware('auth');

Route::get('/pitch/{id}', [UserController::class, 'showPitch'])->name('show_pitch')->middleware('auth');



//Route::get('/invest-single', function () {
//    return view('invest_single');
//})->name('invest_single');

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

Route::get('/profile', function () {
    return view('users.profile');
})->name('profile')->middleware('auth');

Route::get('/wallet', [UserController::class, 'showWallet'])->name('wallet')->middleware('auth');



Route::get('/signup',  [AuthController::class, 'create'])->name('signup')->middleware('guest');

Route::post('/users', [AuthController::class, 'store'])->name('users');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

//Route::get('/verify/{token}', [AuthController::class, 'verify'])->name('verify');

//Route::get('/reset/{token}', [AuthController::class, 'reset'])->name('reset');
//Route::post('/reset/{token}', [AuthController::class, 'change_password'])->name('change_password');

Route::post('/users/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::post('/change-user-password', [AuthController::class, 'change_user_password'])->name('change_user_password');

Route::post('/deposit', [UserController::class, 'deposit'])->name('deposit')->middleware('auth');

Route::post('/transfer', [UserController::class, 'transfer'])->name('transfer')->middleware('auth');






//Route::group(['middleware' => 'adminuser'], function() {
//    Route::get('panel/dashboard', [DashboardController::class, 'dashboard']);
//
//    Route::get('panel/user/list', [UserController::class, 'user']);
//    Route::get('panel/user/add', [UserController::class, 'addUser']);
//    Route::post('panel/user/add', [UserController::class, 'insertUser']);
//    Route::get('panel/user/edit/{id}', [UserController::class, 'editUser']);
//    Route::post('panel/user/edit/{id}', [UserController::class, 'updateUser']);
//    Route::get('panel/user/delete/{id}', [UserController::class, 'deleteUser']);
//
//});

Route::group(['middleware' => 'admin'], function() {
    Route::get('panel/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('panel/user/list', [UserController::class, 'user']);
    Route::get('panel/user/add', [UserController::class, 'addUser']);
    Route::post('panel/user/add', [UserController::class, 'insertUser']);
    Route::get('panel/user/edit/{id}', [UserController::class, 'editUser']);
    Route::post('panel/user/edit/{id}', [UserController::class, 'updateUser']);
    Route::get('panel/user/delete/{id}', [UserController::class, 'deleteUser']);
    Route::get('panel/category/list', [UserController::class, 'cc']);
    Route::get('panel/category/delete/{id}', [UserController::class, 'deleteCc']);
    Route::get('panel/pitches/list', [UserController::class, 'pitches']);
    Route::get('panel/pitches/delete/{id}', [UserController::class, 'deletePitch']);
    Route::get('panel/pitches/download/{id}', [UserController::class, 'downloadFile'])->name('file.download');
    Route::delete('panel/pitches/delete/{id}', [UserController::class, 'deleteFile'])->name('file.delete');
    Route::get('panel/trans/list', [UserController::class, 'trans']);
    Route::get('panel/trans/delete/{id}', [UserController::class, 'deleteTrans']);
    Route::get('panel/category/fund/{id}', [UserController::class, 'fundWallet']);
    Route::post('panel/category/fund/{id}', [UserController::class, 'updateWallet']);
    



});

