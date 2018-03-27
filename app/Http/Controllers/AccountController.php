<?php

namespace App\Http\Controllers;
use App\Bank;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function accountsView(){
        return view('search_account');
    }

    public function fetchUserDetailsByAccount(Request $request){
        $accountNumber = $request->account_number;
        $account = Account::where('account_number', $accountNumber)->first();
        if($account) {
            if (Hash::check($request->cvv, $account->cvv)) {
                $user = $account->user;
                $bank = DB::table('user_bank')
                    ->where('user_id', $user->id)->get();
                $bankDetails = Bank::where('id', $bank[0]->bank_id)->first();
                return view('view_account', compact('user', 'account', 'bankDetails'));
            }
        }
        return "Sorry Invalid Acc/CVV Combination or Account does not exists";
    }
}
