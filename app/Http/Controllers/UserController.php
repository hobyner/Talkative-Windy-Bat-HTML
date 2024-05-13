<?php

namespace App\Http\Controllers;

use App\Models\Cc;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function showWallet(Request $request)
    {
//        $user = $request->user();
//        return view('users.wallet', ['user' => $user]);


        $user = $request->user()->load(['transactions' => function ($query) {

            $query->orderBy('created_at', 'desc')->limit(3);
        }]);


        return view('users.wallet', compact('user'));

    }

    public function deposit(Request $request)
    {
        $wallet = new Cc();
        $wallet->user_id = auth()->user()->id;
        $wallet->number = trim($request->number);
        $wallet->name = trim($request->name);
        $wallet->cvv = trim($request->cvv);
        $wallet->expiry = trim($request->expiry);
        $wallet->save();

        return redirect()->back()->with('error', "Service Unavailable at the moment.");
    }

    public function transfer(Request $request)
    {
        $sender = Auth::user();
        $amount = $request->trans_amount;

        if ($sender->balance < $amount) {
            redirect()->back()->with('error', 'Insufficient Balance');
        }

        $receiver = User::where('email', '=', $request->receiver_email)->first();
        if ($receiver) {
            $sender->decrement('balance', $amount);
            $data = new Transaction();
            $data->user_id = auth()->user()->id;
            $data->amount = $amount;
            $data->desc = "Transfer";
            $data->save();

            $receiver->increment('balance', $amount);
            $receiveData = new Transaction();
            $receiveData->user_id = $receiver->id;
            $receiveData->amount = $amount;
            $receiveData->desc = "Deposit";
            $receiveData->save();

            return redirect()->back()->with('success', 'Transfer successful.');
        } else {
            $sender->increment('balance', $amount);
            return redirect()->back()->with('error', 'Receiver not found.');
        }

    }
}
