@extends('layouts.app')
@section('content')

<a class="top-right links" href="{{ url('/home') }}">Home</a>

<h1> Details for  {{$user->name}}</h1>
<hr>
<ul class='list-group'>
    <li class='list-group-item'>
        <b>Name</b>:{{$user->name}}
    </li>
    <li class='list-group-item'>
        <b>Email</b>:{{$user->email}}
    </li>
</ul>
<button class="btn btn-info" onclick="location.href = '/users/{{$user->id}}/edit';">Edit This User</button>
@stop   