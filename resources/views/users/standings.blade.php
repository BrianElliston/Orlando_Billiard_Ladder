@extends('layouts.app')
@section('content')

<style>

#stand{

color:aqua; 

}

#bobby{

color:red;
text-align: center;

}

#sarah{

color:aqua;

}


</style>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
</head>
<body>

<div class="container">

    <a class="top-right links" href="{{ url('/home') }}">Home</a>

  <h2 id="stand">Current Standings</h2>
  <p id="cont">Please contact administrator if you don't think the standings are correct or believe they should be updated.</p>                        
  <table id="sarah" class="table table-bordered">
  
    <thead>
      <tr>
        <th id="bobby">RANK</th>
        <th id="bobby">NAME</th>
      </tr>
    </thead>
    <tbody id="bobby">
      <tr>
        <td><img src="{{URL::asset('../images/1ball.jpeg')}}" alt="Break Pic" height="50" width="50"></td>
        <td>Anna</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/2ball.jpeg')}}" alt="Break Pic" height="50" width="50"></td>
        <td>Debbie</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/3ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>John</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/4ball.png')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Samuel</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/5ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Bob</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/6ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Max</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/7ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Larry</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/8ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Jason</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/9ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Tina</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/10ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Chad</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/11ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Jimmy</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/12ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Luke</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/13ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Jude</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/14ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Jason</td>
      </tr>
      <tr>
        <td><img src="{{URL::asset('../images/15ball.jpeg')}}" alt="Break Pic" height="55" width="55"></td>
        <td>Billy</td>
      </tr>
      
      

    </tbody>
  </table>
</div>

</body>

@stop