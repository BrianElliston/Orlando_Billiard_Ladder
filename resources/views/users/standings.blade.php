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

     <?php $ranking = 1 ?>

        @foreach ($users as $user)
        <tr>
            <td><img src="{{URL::asset('../images/'.$ranking.'ball.jpeg')}}" alt="Break Pic" height="50" width="50"></td>
            <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
          </tr>

          <?php $ranking++?>

        @endforeach
       
 

    </tbody>
  </table>
</div>

</body>

@stop