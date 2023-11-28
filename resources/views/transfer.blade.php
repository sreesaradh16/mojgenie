@extends('layout.app')
@section('transfer','active')
@section('content')
<div class="col-md-12 col-lg-12">
    <div class="card">
        @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status')}}
        </div>
        @endif
        <div class="card-header">
            <h3 class="card-title">Deposit Money</h3>
        </div>
        @if ($errors->has('name'))
        {{dd($errors)}}
        <span class="text-danger errbk">{{ $errors->first('name') }}</span>
        @endif

        <form action="{{route('transfer_money')}}" method="post" autocomplete="off" novalidate>
            @csrf
            <div class="mb-3" style="padding: 10px;">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                @if ($errors->has('email'))
                <span class="text-danger errbk">{{ $errors->first('email') }}</span>
                @endif
                <label class="form-label">Amount</label>
                <input type="number" class="form-control" name="amount" placeholder="Enter amount to transfer">
                @if ($errors->has('amount'))
                <span class="text-danger errbk">{{ $errors->first('amount') }}</span>
                @endif
                <br>
                <button type="submit" class="btn btn-primary w-100">Deposit</button>
            </div>
        </form>
    </div>
</div>
@endsection