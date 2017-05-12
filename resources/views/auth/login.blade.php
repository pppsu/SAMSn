<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="css/icon.css" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

  <style type="text/css">
    .parent {
      position: relative;
      height: 100vh;

    }
    .child {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0,0,0,0.5);
    }

    body{
      background-image: url('img/backlog.jpg');
      background-repeat:no-repeat;
      background-position:center;
      background-attachment: fixed;
      background-size: cover;
    }

    .set{

      margin: 20px 70px;
    }

  </style>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="parent card" >
  <div class="child card-content">
    <div class="row center">  
      <h2 class="set white-text">Login</h2>
    </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('psu_pass') ? ' has-error' : '' }}">
                            <label for="psu_pass" class="col-md-4 control-label">PSU Passport:</label>

                            <div class="col-md-6">
                                <input id="psu_pass" type="text" class="form-control" name="psu_pass" value="{{ old('psu_pass') }}" required autofocus>

                                @if ($errors->has('psu_pass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('psu_pass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary ">
                                  <i class="material-icons left">perm_identity</i>Login
                                </button>
                                <button type="submit" class="btn btn-primary ">
                                  <i class="material-icons left ">save</i><a class="white-text" href="{{ url('/register') }}">Register</a>
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

</body>
</html>

