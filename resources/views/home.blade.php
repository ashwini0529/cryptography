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

                    <form method="POST" action="accounts/search">
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
            <h3>Add Account</h3>
            <form method="POST" action="accounts/add">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="account">Account Number</label>
                    <input type="text" name="account_number" class="form-control" id="account">
                    <br>
                    <label for="account">CVV</label>
                    <input type="text" name="cvv" class="form-control" id="cvv">
                    <br>
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" class="form-control" id="amount">
                    <br>
                    <label for="bank">Bank Name</label>
                    <select class="form-control" id="sel1" name="bank_id">
                        <option value="1">State bank of India</option>
                        <option value="2">Indian Bank</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Add Account</button>
            </form>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">Linked Bank accounts</div>

                <table class="table">
                    <tbody>
                    @if($bankDetails)
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
                        @endif


                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
