@extends('layouts.app')
@section('content')



<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
</head>
<body>

<div class="container">

    <a class="top-right links" href="{{ url('/home') }}">Home</a>

  <h2>Current Standings</h2>
  <p id="cont">Please contact administrator if you don't think the standings are correct or believe they should be updated.</p>                        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>King Of The Hill</td>
        <td>Anna</td>
      </tr>
      <tr>
        <td>2nd</td>
        <td>Debbie</td>
      </tr>
      <tr>
        <td>3rd</td>
        <td>John</td>
      </tr>
      <tr>
        <td>4th</td>
        <td>Samuel</td>
      </tr>
      <tr>
        <td>5th</td>
        <td>Bob</td>
      </tr>
      <tr>
        <td>6th</td>
        <td>Max</td>
      </tr>
      <tr>
        <td>7th</td>
        <td>Larry</td>
      </tr>
      <tr>
        <td>8th</td>
        <td>Jason</td>
      </tr>
      <tr>
        <td>9th</td>
        <td>Tina</td>
      </tr>
      <tr>
        <td>10th</td>
        <td>Chad</td>
      </tr>
      <tr>
        <td>11th</td>
        <td>Jimmy</td>
      </tr>
      <tr>
        <td>12th</td>
        <td>Luke</td>
      </tr>
      <tr>
        <td>13th</td>
        <td>Jude</td>
      </tr>
      <tr>
        <td>14th</td>
        <td>Jason</td>
      </tr>
      <tr>
        <td>15th</td>
        <td>Billy</td>
      </tr>
      <tr>
        <td>16th</td>
        <td>Rebecca</td>
      </tr>
      <tr>
        <td>17th</td>
        <td>Juan</td>
      </tr>
      <tr>
        <td>18th</td>
        <td>Ahmed</td>
      </tr>
      <tr>
        <td>19th</td>
        <td>Christy</td>
      </tr>
      <tr>
        <td>20th</td>
        <td>Tamara</td>
      </tr>
      

    </tbody>
  </table>
</div>

</body>

@stop