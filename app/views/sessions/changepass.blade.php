@extends('layouts.home')
@section('main')
<br><br><br><bn><br><br><br>
<div class="area" align="center">
  {{Form::open(array('url'=>'sessions.store'))}}
    <div class="header" align="center"><br>
     <h4>Username: Change Password</h4><hr>
     </div>
     <div class="form-inline"><h5 class="password">&nbspNew Password:</h5>
     {{Form::password('newpassword',array('class' =>'form-control'));}}
     </div>
     <div class="form-inline"><h5 class="password">&nbspRetype Password:</h5>
     {{Form::password('retypepassword',array('class' =>'form-control'));}}
     </div>
     <br>
     <div class="form-inline">
     {{Form::submit('Save And Login',array('class'=>'btn btn-primary','id'=>'btnRon'));}}
     </div><br>
  {{ Form::close()}}
</div>
@stop
