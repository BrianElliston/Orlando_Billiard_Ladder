@extends('layouts.app')
@section('content')

<a class="top-right links" href="{{ url('/home') }}">Home</a>

<style>

.money{

    color:burlywood;   
}

</style>

<a class="money" href="https://www.paypal.me/BilliardLadder/10"><h1>Make Payment</h1></a>

<img src="{{URL::asset('../images/poolMoney.jpeg')}}" alt="Break Pic" height="200" width="400">




@stop   