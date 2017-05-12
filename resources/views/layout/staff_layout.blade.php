<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="css/icon.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    @yield('css')

    <style type="text/css">
        header, main, footer {padding-left: 300px;}
        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }
        section {padding: 0% 2%;}
        .collapsible-body {padding: 0px ; }
        .bk {background-color: #212121;}
        .side-nav a:hover {background-color: rgba(0,0,0,0.1) !important;}
        .divider{ background-color: grey}

    </style>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="grey lighten-5">
    <header>
        <nav class="">
            <div class="nav-wrapper  indigo darken-3 ">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="">Staff:</a></li>
                    <li><a href="">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></li>

                </ul>
            </div>
        </nav>

        <ul id="slide-out" class="side-nav fixed" >

            <li>
                <div class="userView indigo darken-2" style="padding: 32px 32px 90px">
                    <img class="circle" src="img/PSU2.png">
                </div>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <ul class="collapsible ">
                <li>
                    <div class="collapsible-header">
                        Organization Information
                    </div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="organizeation">Information</a></li>
                            <li><a href="addOrganization">Add Organization</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">
                        Member Information
                    </div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="Member">Information</a></li>
                            <li><a href="addMember">Add member</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header bk">
                        An Authority's Information
                    </div>

                    <div class="collapsible-body">
                        <ul>
                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            Student union
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="studentUnion">Information</a></li>
                                                <li><a href="addStudentUnion">Add Student Union</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            Student Councill
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="studentCouncil">Information</a></li>
                                                <li><a href="addStudentCouncil">Add Student Councill</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header  truncate">
                                            Head Of Student Activity Section
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="headOfActivity">Information</a></li>
                                                <li><a class="truncate" href="addHeadOfStudentActivity">Add Head Of Student Activity Section</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header  truncate">
                                            Head of Student Affairs Division
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="headOfAffairs">Information</a></li>
                                                <li><a class="truncate" href="addHeadOfStudentAffairs">Add Head of Student Affairs Division</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header truncate">
                                            Assistant to The President for Student Development
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="presidentForStudent">Information</a></li>
                                                <li><a class="truncate" href="addPresidentForStudent">Add Assistant to the President for Student Development</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header  truncate">
                                            Vice President for Acdemic Affairs for Phuket Campus
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="presidentForAcademic">Information</a></li>
                                                <li><a class="truncate" href="addPresidentForAcademic">Add Vice President for Acdemic Affairs for Phuket Campus</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
            <li><div class="divider"></div></li>
        </ul>


    </header>
    <main>
        @yield('content') 
    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(".button-collapse").sideNav();
    </script>
    @yield('js')
</body>
</html>
