<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Form</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css"  crossorigin="anonymous">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script src="../bower_components/webcomponentsjs/webcomponents-lite.js"></script>
        <script href="js/datepick.js"></script>
        <script href="js/ion-rangeSlider/ion.rangeSlider.js"></script>

        <link rel="import" href="../bower_components/polymer/polymer.html">
        <!-- CSS  -->
        <link href="css/label.css" rel="stylesheet" />
        <link href="css/datepick.css" rel="stylesheet" />
        <link href="css/underline.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" href="https://www.gstatic.com/_/freebird/_/ss/k=freebird.e.-1v9562icdcj6f.L.W.O/d=1/rs=AMjVe6jEWiOnYrEzobvs6QdNdSOr1XNFZg" data-id="_cl">
        <link href="css/ion.rangeSlider.skinModern.css" rel="stylesheet" />
        <link href="img/sprite-skin-modern.png" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">


    </head>
    <body>
        <style >
            font-family: 'Source Sans Pro', sans-serif;
        </style>
        
        @section('sidebar')

            <nav class="#8e24aa indigo darken-3" role="navigation">
                <div class="nav-wrapper container">
                    <!-- <a id="logo-container" href="#" class="brand-logo"><img src="images/logo.png" height="49px" width="34px" alt=""></a> -->
                    <a id="logo-container" href="{{ route('document.index') }}" class="brand-logo"><img src="https://goo.gl/wEIa98"  height="49px" width="34px"></a>
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

            <div class="section no-pad-bot" id="index-banner">
            <div class="container">
            <br><br>
            <div class="row center card-panel white hoverable">
                <h5 class="header col s12 orange-text">ACTIVITY/ PROJECT/ EVENT APPROVAL FORM</h5>
                <h6 class="header col s12 light"><b>FOR Student Union/ Student Council/ Faculty’s Student Union/ Student Club / Activity Organization</b></h6>
            </div>
            <br><br>
        </div>
    </div>
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
        <script >
    function outputUpdate(vol) {
        document.querySelector('#volume').value = vol;
    }
</script>

    </body>
</html>