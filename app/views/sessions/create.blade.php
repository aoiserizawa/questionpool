<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  ".login-form":{
      border: 1px solid black;

  }
  </style>
</head>
<body>

<form>
  <div align="center">
  {{Form::open(array('url'=>'sessions.store', 'class'=>'login-form'))}}
    <div><br>
     {{Form::label('frmMainLabel','USER LOGIN')}}
     </div><br>
     <div>
     {{Form::text('usermail',null,array('class' =>'form-control','placeholder'=>'Username/Email'));}}
     </div><br>
     <div>
     {{Form::password('password',array('class' =>'form-control'));}}
     </div>
     <br>
     <div>
     {{Form::submit('Login',array('class'=>'btn btn-primary'));}}
     </div><br>
     <div>
     <a href="#">Forgot Password</a>
     </div>
    
  {{ Form::close()}}
  </div>
</form>
</body>
</html>