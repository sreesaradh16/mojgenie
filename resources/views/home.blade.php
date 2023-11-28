@extends('layout.app')
@section('home','active')
@section('content')
<div class="col-md-12 col-lg-12">
    <div class="card">
        @if(Session::has('status'))
        <div class="card-header">
            <h3 class="card-title">{{ Session::get('status')}}</h3>
        </div>
        @endif
        <div class="card-header">
            <h3 class="card-title">Welcome {{auth()->user()->name}}</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-body">YOUR ID</div>
            </div>
            <div class="col-md-8">
                <div class="card-body">{{auth()->user()->email}}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-body">YOUR BALANCE</div>
            </div>
            <div class="col-md-8">
                <div class="card-body">{{auth()->user()->amount}}</div>
            </div>
        </div>
    </div>
</div>
@endsection