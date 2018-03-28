<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bank;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function fetchUserDetails(){
        $user = Auth::user();
        $bank = DB::table('user_bank')
            ->where('user_id', $user->id)->get();
        $bankDetails = Bank::where('id', $bank[0]->bank_id)->get();
        return view('profile', compact('user', 'bankDetails'));
    }

    public function fetchAccounts(){
        $user = Auth::user();
        $userAccounts = $user->accounts;
        return view('user_accounts', compact('userAccounts'));

    }

    public function addAccount(Request $request){
        $user = Auth::user();
        $bankId = $request->bank_id;
        $accountNumber = $request->account_number;
        $cvv = bcrypt($request->cvv);
        $amount = $request->amount;
        $account = new Account();
        $account->user_id = $user->id;
        $account->amount = $amount;
        $account->cvv = $cvv;
        $account->account_number = $accountNumber;
        $account->save();
        DB::table('user_bank')->insert(
            ['user_id' => $user->id, 'bank_id' => $bankId]
        );
        return 'Bank account linked successfully';
    }
}
