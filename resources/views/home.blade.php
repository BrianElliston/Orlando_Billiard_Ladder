@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a id="house" href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                    {{--  <h1 id="bob">Orlando Billiard Ladder Challenge</h1>  --}}
                    <div class="links">

                            <a href="http://localhost:8000/about">About</a>
                            <a href="http://localhost:8000/rules">Rules</a>
                            <a href="http://localhost:8000/standings">Standings</a>
                            {{--  <a href="http://localhost:8000/users">Players</a>  --}}
                            <a href="http://localhost:8000/contact">Contact</a>
                            <a href="http://localhost:8000/payment">Payment</a>
                </div>

                    <img src="{{URL::asset('../images/break.jpg')}}" alt="Break Pic" height="400" width="600">
                
            </div>
        </div>
 
@stop

