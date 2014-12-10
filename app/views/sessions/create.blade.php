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
    
    .area {
      border: 1px solid black;
      border-radius: 8px;
      -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
         -moz-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
              box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
        width: 500px;
        margin: 0 auto;
        
    }

  </style>
</head>
<body>


<div class="area">
  {{Form::open(array('url'=>'sessions.store'))}}
    <div><br>
     <h2 align="center">USER LOG-IN</h2>
     </div><br>
     <div class="form group">
     {{Form::text('usermail',null,array('class' =>'form-control','placeholder'=>'Username/Email'));}}
     </div><br>
     <div class="form group">
     {{Form::password('password',array('class' =>'form-control'));}}
     </div>
     <br>
     <div class="form group">
     {{Form::submit('Login',array('class'=>'form-control btn btn-primary'));}}
     </div><br>
     <div>
     <a href="#">Forgot Password</a>
    </div>
    
  {{ Form::close()}}
</div>

</body>
</html>