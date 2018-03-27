@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                        @foreach($banks as $bank)
                        <div class="panel-body">
                            <p>Bank Details</p>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$bank->name}}</td>
                                </tr>
                                <tr>
                                    <td>IFSC</td>
                                    <td>{{$bank->IFSC}}</td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
