@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Account Details</div>
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Account Number</td>
                                    <td>{{$account->account_number}}</td>
                                </tr>
                                <tr>
                                    <td>IFSC</td>
                                    <td>{{$bankDetails->IFSC}}</td>
                                </tr>
                                <tr>
                                    <td>Bank Name</td>
                                    <td>{{$bankDetails->name}}</td>
                                </tr>
                                </tbody>

                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection
