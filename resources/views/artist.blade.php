<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Endpoints</title>
  @include('layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
   @include('layouts.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      @include('layouts.aside')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        Endpoints
        
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <!-- /.box -->
            <div class="register-box-body">
      @if ($errors->has())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }}<br>        
                             @endforeach
                        </div>
                        @endif
    <p class="login-box-msg">What do you do?</p>
                        {!! Form::open() !!}
                         {!!Form::label('type','Type:')!!}<br/>
                            {{ Form::select('type', ['L' => 'Large', 'S' => 'Small']) }}<br/>
                            {!!Form::label('about','About you:')!!}<br/>
                            {!!Form::textarea('about')!!}<br/>
                            {!!Form::label('area','Where are you from?')!!}</br>
                            {!!Form::text('area')!!}<br/>
                            {!! Form::submit('Add work') !!}


                        {!! Form::close() !!}
    

    <div class="social-auth-links text-center">
    <!--  <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>-->
    </div>

    
  </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

<!-- <div id="example1_filter" class="dataTables_filter">
      Search:
      <input class="form-control input-sm" aria-controls="example1" placeholder="" type="search"></input>
      
  </div>  -->
  <!-- Control Sidebar -->
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
