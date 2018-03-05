<!doctype html>
            <html lang="{{ app()->getLocale() }}">
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
            
                    <title>Orlando Billiard Ladder Challenge</title>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            
            
                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            
                    
            
                    <!-- Styles -->
                    <style>
            
                        #bob{
                            color:aqua;
                            
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
                            right: 40px;
                            top: 50px;
                            color: red;
                            padding: 0 25px;
                            font-size: 12px;
                            font-weight: 600;
                            letter-spacing: .1rem;
                            text-decoration: none;
                            text-transform: uppercase;
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
            
            
                        .table {

                            font-size: 30px;
                        }

                        #cont{
                            color:red;
                            font-size: 20px;

                        }

                        #sally{
                            position: absolute;
                            left: 40px;
                            top: 18px;
                            color: red;
                            padding: 0 25px;
                            font-size: 12px;
                            font-weight: 600;
                            letter-spacing: .1rem;
                            text-decoration: none;
                            text-transform: uppercase;

                        }

                        #house{
                            position: absolute;
                            right: 40px;
                            top: -130px;
                            color: red;
                            padding: 0 25px;
                            font-size: 12px;
                            font-weight: 600;
                            letter-spacing: .1rem;
                            text-decoration: none;
                            text-transform: uppercase;
                            
                        }
            
                       
                    </style>
                </head>

                    
       
                <body>
            
            
            
                    
                    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                        <div class="container">
                           
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                </ul>
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        {{--  <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>  --}}
                                    @else
                                        <div id="sally" class="nav-item dropdown">

                                            <a id="sally" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Logout <span class=""></span>
                                            </a>
                                            <div id="sally" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    Are you sure you want to logout?
                                                </a>
                                                <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf  
                                                </form>
                                                
                                            </div>
                                        </div>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
            
            
            
                        <div class="content">
            
                                <h1 id="bob">Orlando Billiard Ladder Challenge</h1>
            
                             
            
                          @yield("content")  
            
            
                            
                        </div>
                    </div>
             
                 
        

                    <!-- Scripts -->
                    <script src="{{ asset('js/app.js') }}"></script>
    </body>

