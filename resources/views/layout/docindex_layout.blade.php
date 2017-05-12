<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <!-- CSS  -->
        <link href="css/icon.css" rel="stylesheet" />
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        @section('sidebar')
            <nav class="#8e24aa indigo darken-3" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><img src="images/logo.png" height="49px" width="34px" alt=""></a>
                <ul class="right">
                    <li><a href="#">Student</a></li>
                     <li><a href="">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>

        @show

        <div class="">
            @yield('content')
            
        </div>
        <div>
        @section('footer')
        <div class="page-footer #8e24aa indigo darken-3">
        <div class="container">

                <div class="row white-text text-lighten-3">
                    Prince of Songkla University, Phuket Campus 
                    <span id="datetime" class="right"></span>
                </div>


            </div>
            <div class="footer-copyright">
                <div class="container">
                    Creative by <a class="brown-text text-lighten-3" href="">Morning Lab</a>
                </div>
            </div>
        </div>
        @show
        </div>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>var today = new Date();
            document.getElementById('time').innerHTML = today;</script>
        <script>
            var dt = new Date();
            document.getElementById("datetime").innerHTML = (("0" + dt.getDate()).slice(-2)) + "/" + (("0" + (dt.getMonth() + 1)).slice(-2)) + "/" + (dt.getFullYear()) + " " + (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2));
        </script>
    </body>
</html>



