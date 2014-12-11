@extends('layouts.home')
@section('style')
<style>
.area {
    border: 1px solid black;
    border-radius: 8px;
      -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
      -moz-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       width: 500px;
       margin: 0 auto;
       padding: 50px;
}
h3{
  font-weight: bold;
}
</style>

@section('main')
<br><br><br><bn><br><br><br>
<div class="area">
  {{Form::open(array('url'=>'sessions.store'))}}
    <div><br>
     <h3 align="center">Username: Change Password</h3>
     </div><br>
     <div class="form group"><h5>New Password:</h5>
     {{Form::password('newpassword',array('class' =>'form-control'));}}
     </div>
     <div class="form group"><h5>Retype Password:</h5>
     {{Form::password('retypepassword',array('class' =>'form-control'));}}
     </div>
     <br>
     <div class="form group col-md-offset-8">
     {{Form::submit('Save And Login',array('class'=>'btn btn-primary'));}}
     </div>
  {{ Form::close()}}
</div>
@stop
