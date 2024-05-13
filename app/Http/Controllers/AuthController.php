<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Hash;
use Mail;
Use App\Mail\RegisterMail;
use Str;
use Auth;

class AuthController extends Controller
{
    //
    public function create(){
        return view('users.signup');
    }

    public function store(Request $request) {
//        request()->validate([
//            'type' => ['required'],
//            'name' => ['required', 'min:3'],
//            'email' => ['required', 'email', Rule::unique('users', 'email')],
//            'password' => ['required|confirmed|min:6'],
//            'secret' => ['required']
//        ]);

        $save = new User;
        $save->type = trim($request->type);
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->secret = trim($request->secret);
        $save->balance = 0;
//        $save->remember_token = Str::random(45);
        $save->save();

//        Mail::to($save->email)->send(new RegisterMail($save));

        auth()->login($save);

        return redirect()->route('landing')->with('message', 'User created successfully');

    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('landing')->with('message', 'You have been logged out!');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect()->route('wallet')->with('message', "You are now logged in");
        }

        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');

//        if (Auth::attempt($formFields)) {
//            if (!empty(Auth::user()->email_verified_at)) {
//                $request->session()->regenerate();
//                return redirect()->route('landing')->with('message', "You are now logged in");
//            } else {
//
//                $user_id = Auth::user()->id;
//                Auth::logout();
//
//                $save = User::getSingle($user_id);
//                $save->remember_token = Str::random(45);
//                $save->save();
//
//                $request->session()->invalidate();
//                $request->session()->regenerate();
//
//                Mail::to($save->email)->send(new RegisterMail($save));
//                return redirect()->back()->with('success', 'Verification mail has been resent');
//            }
//        }

//        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }

    public function verify($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)){
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(35);
            $user->save();

            return redirect('login')->with('success', "Your account is Verified");
        } else {
            abort(404);
        }
    }

    public function forgot_password(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)) {
            if (!$request->secret == $user->secret) {
                return redirect()->back()->with('error', "Wrong Secret Answer");
            }
            $user->password = Hash::make($request->password);
            $user->save();

//            $user->remember_token = Str::random(45);
//            $user->save();
//            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect('login')->with('success', "Password has been reset");
        } else {
            return redirect()->back()->with('error', "Email not registered.");
        }
    }

    public function reset($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)){
            $data['user'] = $user;
            return view('users.reset', $data);

        } else {
            abort(404);
        }
    }

    public function change_password($token, Request $request)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)){
            if($request->password == $request->password_confirmation){

                $user->password = Hash::make($request->password);
                if(empty($user->email_verified_at)) {
                   $user->email_verified_at = date('Y-m-d H:i:s');
                }
                $user->remember_token = Str::random(45);
                $user->save();

                return redirect('login')->with('success', "Password has been reset");

            } else {
                return redirect()->back()->with('error', "Passwords do not match");
            }

        } else {
            abort(404);
        }
    }

    public function change_user_password(Request $request)
    {

        if (password_verify($request->new_password, auth()->user()->password)){
            return redirect()->back()->with('error', "Old and new passwords should not match");
        }

        if (password_verify($request->old_password, auth()->user()->password)) {

            $validator = Validator::make($request->all(), [
                'new_password' => 'required|confirmed|min:6'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', "Invalid Password");
            }

            $user = Auth::user();
            $newPassword = Hash::make($request->input('new_password'));
            $user->password = $newPassword;
            $user->save();

            return redirect()->back()->with('success', "Passwords changed successfully");
        }

    }


}
