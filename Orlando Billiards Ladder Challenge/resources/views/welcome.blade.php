<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orlando Billiard Ladder Challenge</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        

        <!-- Styles -->
        <style>

            #bob{
                color:aquamarine;
            }

           
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

                  

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: red;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



           
        </style>
    </head>
    <body>



        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">

                    <h1 id="bob">Orlando Billiard Ladder Challenge</h1>

                    <div class="links">
                            <a href="https://laravel.com/docs">Contact</a>
                            <a href="https://laracasts.com">Standings</a>
                            <a href="https://laravel-news.com">Rules</a>
                            <a href="https://forge.laravel.com">Sign In</a>
                            <a href="https://github.com/laravel/laravel">Sign Up</a>
                   </div>

                
<
                    <img src="{{URL::asset('../images/break.jpg')}}" alt="Break Pic" height="300" width="400">


                

                <div>
                    <h2>
                        Are you up for the challenge?  Join Orlando's only quarterly Billiards ladder Challenge!!
                    </h2>
                </div>


                
            </div>
        </div>
    </body>
</html>
