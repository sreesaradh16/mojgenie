@extends('layout.app')
@section('deposit','active')
@section('content')
<div class="col-md-12 col-lg-12">
    <div class="card">
        @if(Session::has('status'))
        <div class="alert alert-success" id="status_div">
            {{ Session::get('status')}}
        </div>
        @endif

        <div class="card-header">
            <h3 class="card-title">Deposit Money</h3>
        </div>

        <form action="{{route('deposit_money')}}" method="post" autocomplete="off" novalidate>
            @csrf
            <div class="mb-3" style="padding: 10px;">
                <label class="form-label">Amount</label>
                <input type="number" class="form-control" name="amount" placeholder="Enter amount to deposit">
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