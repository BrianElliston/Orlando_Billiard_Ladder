@extends('layouts.app')
@section('content')

<style>

#shark{

float: right;

}

#welcome{

color: red;

}

.about{

color:aqua;

}

#see{

color:red;  

}

</style>

<a class="top-right links" href="{{ url('/home') }}">Home</a>

<h1 id="welcome" >Welcome to Orlando Billiard Ladder Challenge!!</h1>

<img id="shark" src="{{URL::asset('../images/poolShark.jpeg')}}" alt="Break Pic" height="350" width="400">

<h2 class="about">The Orlando Billiard Ladder Challenge is a quarterly ladder tournament in Orlando, Fl.  The challenge is open to the first 20 players that sign up (sign up begins one month before challenge start date).</h2>

<h2 class="about">There is a ten dollar entry fee and each match costs the challenger ten dollars.</h2>

<h2 class="about">The top three players on the ladder will share the prize pool. </h2>

<h3 id="see">CLICK ON THE RULES LINK ON THE HOME PAGE FOR DETAILS</h3>

@stop