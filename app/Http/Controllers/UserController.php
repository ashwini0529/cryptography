<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function fetchUserDetails(){
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function fetchAccounts(){
        $user = Auth::user();
        $userAccounts = $user->accounts;
        return view('user_accounts', compact('userAccounts'));

    }
}
