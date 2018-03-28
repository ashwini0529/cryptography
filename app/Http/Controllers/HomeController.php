<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Bank;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $bank = DB::table('user_bank')
            ->where('user_id', $user->id)->get();

        if($bank->count()!=0) {
            $bankDetails = Bank::where('id', $bank[0]->bank_id)->get();
        }
        else{
            $bankDetails=[];
        }
        return view('home', compact('bankDetails'));
    }
}
