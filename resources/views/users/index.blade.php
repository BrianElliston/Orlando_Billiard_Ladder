@extends('layouts.app')
@section('content')

<a class="top-right links" href="{{ url('/home') }}">Home</a>

<h1>Here is a list of all the players</h1>
<ul class='list-group'>
    @foreach ($users as $user)
        <li class='list-item-group'><a href="/users/{{$user->id}}">{{$user->name}}</a>
            
        </li>
        @endforeach
</ul>


@stop