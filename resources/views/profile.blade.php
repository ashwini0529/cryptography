@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <p>Details</p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Aadhar Number</td>
                                <td>{{$user->aadhar}}</td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>
                                <td>{{$user->contact}}</td>
                            </tr>
                            <tr>
                                <td>Secret Answer</td>
                                <td>{{$user->secret_answer}}</td>
                            </tr>
                            <tr>
                                <td>DOB</td>
                                <td>{{$user->dob}}</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bank accounts</div>

                    <div class="panel-body">
                        <p>Bank Details</p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>No linked bank accounts</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
