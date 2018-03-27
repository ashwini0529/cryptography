<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function showBanks(){
        $banks = Bank::all();
        return view('banks', compact('banks'));
        return $banks;
    }
}
