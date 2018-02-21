@extends('layouts.app')
@section('content')
<div class="container">

    <a href="{{ url('/home') }}">Home</a>

<h1>Edit User: {{$user->name}}</h1>

<form method="post" action="/users/{{$user->id}}">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <div class="form-group">
      <label for="name">Change Name</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Enter New Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    </div>
    
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
  @stop