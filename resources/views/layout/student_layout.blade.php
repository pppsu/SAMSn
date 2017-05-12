<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="css/icon.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    @yield('css')
    <body>
        <nav class="#8e24aa indigo darken-3" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><img src="img/logo.png" " height="49px" width="34px" alt=""></a>
                <ul class="right">
                    <li><a href="#">Student</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>
        </body>
        <main>
        @yield('content') 
    </main>

    
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
    <footer class="page-footer #8e24aa indigo darken-3">
    @yield('footer')  
   </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(".button-collapse").sideNav();
    </script>
    @yield('js')
</body>
</html>
