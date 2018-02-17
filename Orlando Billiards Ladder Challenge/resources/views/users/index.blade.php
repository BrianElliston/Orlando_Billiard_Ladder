@extends('layouts.app')
@section('content')
<h1>Here is a list of all the users</h1>
<ul class='list-group'>
    @foreach ($users as $user)
        <li class='list-item-group'><a href="/users/{{$user->id}}">{{$user->name}}</a>
            
        </li>
        @endforeach
</ul>


@stop