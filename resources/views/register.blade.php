<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ArtItUp | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/AdminLTE/bootstrap/css/bootstrap.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/AdminLTE/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>ArtItUp</b></a>
  </div>

  <div class="register-box-body">
      @if ($errors->has())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }}<br>        
                             @endforeach
                        </div>
                        @endif
    <p class="login-box-msg">Register a new membership</p>
                        {!! Form::open() !!}
                            {!! Form::label('name','Name:')!!}<br/>
                            {!! Form::text('name') !!}<br/>
                            {!! Form::label('email','Email:')!!}<br/>
                            {!! Form::text('email') !!}<br/>
                            {!! Form::label('usertype','User:')!!}
                            {{ Form::radio('usertype', '0') }}
                            {!! Form::label('usertype','Artist:')!!}
                            {{ Form::radio('usertype', '1') }}<br/>
                            {!! Form::label('password','Password:') !!}<br/>
                            {!! Form::password('password')!!}<br/>
                            {!! Form::label('repassword','Confirm Password:') !!}<br/>
                            {!! Form::password('repassword')!!}<br/>
                            {!! Form::submit('register') !!}


                        {!! Form::close() !!}
    

    <div class="social-auth-links text-center">
    <!--  <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>-->
    </div>

    <a href="{{URL::to('login')}}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

                       