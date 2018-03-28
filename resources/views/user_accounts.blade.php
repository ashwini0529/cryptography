@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Accounts</div>
                        <div class="panel-body">
                            <p>Account Details</p>
                            <table class="table">
                                <tbody>

                                @foreach($userAccounts as $account)
                                <tr>
                                    <td>Account Number</td>
                                    <td>{{$account->account_number}}</td>
                                </tr>
                                <tr>
                                    <td>Hashed CVV</td>
                                    <td>{{$account->cvv}}</td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection
