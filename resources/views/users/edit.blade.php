@extends('layouts.app')
@section('content')
<div class="container">

    <a class="top-right links" href="{{ url('/home') }}">Home</a>

<h1>Edit User: {{$user->name}}</h1>

<form method="post" action="/users/{{$user->id}}">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <div class="form-group">
      <label for="name"></label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Enter New Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"></label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    </div>
   
    
   
    <button type="submit" class="btn btn-default">Submit</button>
   
  </form>

  <form method='POST' action="/users/{{$user->id}}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <input type="submit" value="Delete" class="btn" onclick="return confirm('Are you sure to delete player?')">       
 </form>

</div>
  @stop