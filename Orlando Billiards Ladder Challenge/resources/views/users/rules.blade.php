@extends('layouts.app')
@section('content')

<style> 

    .rules{
        color: aqua;
    }

    .desc{
        color: aliceblue;
        padding: 30px;

    }

    .admin{
        color:red;
    }
</style>

<a class="top-right links" href="{{ url('/home') }}">Home</a>

<img src="{{URL::asset('../images/ReyesSiegel.jpg')}}" alt="Break Pic" height="400" width="600">

<h4 class="desc">The challenge will start with random computer generated results.  Once the initial results are set, any player that is below another player on the ladder may challenge any player on the next rung above them on the ladder.  Contact can be made in person or by phone or email.  Email will be the official means of contact.  Players should be as flexible as possible to arrange an agreed meeting time to play a match.  All players agree to meet for the match within one week of being challenged OR players MUST meet on the first Saturday at Trick Shots Metro West at 6 p.m. following the initial week of the challenge.  If the challenged player can not arrange a time and place to play during the first week or up to the first Saturday following then they must meet Saturday or the challenge will be awarded to the player that requested the challenge by forfeit. </h4>




<h4 class="desc"> All matches will begin with a lag. The winner of the lag may choose to take the opening break OR choose if 8 or 9 ball will be played first.  All matches will be a race to 7 with the first 7 games being either 8 ball or 9 ball.  Once a total of seven games have been played the game will be switched to 8 or 9 ball respectively for the remainder of the match.  BCA rules will govern the rules of play.</h4>

<h4 class="desc">Administrator must be notified within 24 hours of any change in rankings which will be updated on the website.</h4>

<h3 class= "admin">Administrator will have final say on all disputes.</h3>

<a class="rules"  href="https://www.billiards.com/article/official-bca-8-ball-rules">8-Ball Rules</a>

<br>
<br>
<br>

<a class="rules"  href="https://www.billiards.com/article/official-bca-9-ball-rules">9-Ball Rules</a>

@stop