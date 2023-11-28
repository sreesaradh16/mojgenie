@extends('layout.app')
@section('withdraw','active')
@section('content')
<div class="col-md-12 col-lg-12">
    <div class="card">
        @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status')}}
        </div>
        @endif
        <div class="card-header">
            <h3 class="card-title">Withdraw Money</h3>
        </div>

        <form action="{{route('withdraw_money')}}" method="post" autocomplete="off" novalidate>
            @csrf
            <div class="mb-3" style="padding: 10px;">
                <label class="form-label">Amount</label>
                <input type="number" class="form-control" name="amount" placeholder="Enter amount to withdraw">
                @if ($errors->has('amount'))
                <span class="text-danger errbk">{{ $errors->first('amount') }}</span>
                @endif
                <br>
                <button type="submit" class="btn btn-primary w-100">Withdraw</button>
            </div>
        </form>
    </div>
</div>
@endsection