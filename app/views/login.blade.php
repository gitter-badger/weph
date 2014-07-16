<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar sesión</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
<style type="text/css">
	body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #fff;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="username"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
</head>

<body>
<div class="container">
  @if(Session::has('mensaje_error'))
    {{ Session::get('mensaje_error') }}
  @endif
  <center><h1 class="form-signin-heading">Contact Center</h1></center>
  {{Form::open(array('url'=>'/store', 'class'=>'form-signin'))}}
    {{Form::text('username', Input::old('username'), array('class'=>'form-control', 'placeholder'=>'Username'))}}
    {{Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password'))}}
    {{Form::label('lblRemenberme', 'Recordarme')}}
    {{Form::checkbox('remenberme', true)}}
    {{Form::submit('Iniciar', array('class'=>'btn btn-lg btn-primary btn-block'))}}
  {{Form::close()}}
</div>
<script src="/js/jquery1-11-0.min.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>