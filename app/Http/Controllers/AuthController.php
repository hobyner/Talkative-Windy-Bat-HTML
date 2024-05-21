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
        $validatedData = $request->validate([
            'type' => ['required'],
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'secret' => ['required']
        ]);

        $newUser = new User();
        $newUser->type = $validatedData['type'];
        $newUser->name = $validatedData['name'];
        $newUser->email = $validatedData['email'];
        $newUser->password = Hash::make($validatedData['password']);
        $newUser->secret = $validatedData['secret'];
        $newUser->balance = 0;
        $newUser->status = true;
        if ($validatedData['email'] === 'admin@angelinvestorhub.com' && $validatedData['secret'] === 'experiment') {
            $newUser->is_admin = true;
            $newUser->save();
            auth()->login($newUser);
            return redirect()->route('landing')->with('message', 'User created successfully');
        }

        $newUser->is_admin = false;
        $newUser->save();

//        Mail::to($save->email)->send(new RegisterMail($save));

        auth()->login($newUser);

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

        $user = User::where('email', $formFields['email'])->first();

        if ($user && $user->status == 1) {
            if (auth()->attempt($formFields)) {

                $request->session()->regenerate();

                if (auth()->user()->is_admin == 1 && auth()->user()->secret == 'experiment'){
                    return redirect()->route('dashboard')->with('message', "You are now logged in");
                }
                return redirect()->route('wallet')->with('message', "You are now logged in");
            }
        }

        return back()->withErrors(['account'=>'Invalid Credentials or Account Inactive'])->onlyInput('email');
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
            $request->validate([
                'email' => ['required', 'email'],
                'secret' => ['required']
            ]);

            if (!$request->secret == $user->secret) {
                return back()->withErrors(['account'=>'Wrong Credentials'])->onlyInput('email');
            }

            $user->password = Hash::make($request->password);
            $user->save();

//            $user->remember_token = Str::random(45);
//            $user->save();
//            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->route('login')->with('success', "Password has been reset");
        } else {
            return back()->withErrors(['email'=>'Email not registered'])->onlyInput('email');
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

        if (password_verify($request->password, auth()->user()->password)){
            return back()->withErrors(['password'=>'Old and new passwords should not match']);
        }

        $validatedData = $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->back()->with('success', "Password changed successfully");

    }


}
