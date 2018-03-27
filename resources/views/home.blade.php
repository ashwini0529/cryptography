@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/accounts/search">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="account">Account Number</label>
                            <input type="text" name="account_number" class="form-control" id="account">
                            <br>
                            <label for="account">CVV</label>
                            <input type="text" name="cvv" class="form-control" id="cvv">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Linked Bank accounts</div>

                <table class="table">
                    <tbody>
                @foreach($bankDetails as $bankDetail)
                        <tr>
                            <td>Bank Name</td>
                            <td>{{$bankDetail->name}}</td>
                        </tr>
                        <tr>
                            <td>Bank IFSC</td>
                            <td>{{$bankDetail->IFSC}}</td>
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
