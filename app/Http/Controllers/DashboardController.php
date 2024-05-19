<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userCount['getCount'] = User::getUserCount();
        return view('backend.dashboard', $userCount);
    }
}
