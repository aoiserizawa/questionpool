@extends('layouts.home')
@section('main')
<div class="area" align="center">
  {{Form::open(array('url'=>'sessions.store'))}}
    <div class="header" align="center"><br>
     <h4>User Settings</h4><hr>
     </div>
     <div class="form-inline"><h5 class="password">&nbspEmail:</h5>
     {{Form::text('email',null,array('class' =>'form-control','placeholder'=>'Email'));}}
     </div>
     <div class="form-inline"><h5 class="password">&nbspCurrent Password:</h5>
     {{Form::password('currentpassword',array('class' =>'form-control'));}}
     </div>
     <div class="form-inline"><h5 class="password">&nbspNew Password:</h5>
     {{Form::password('newpassword',array('class' =>'form-control'));}}
     </div>
     <div class="form-inline"><h5 class="password">&nbspRetype Password:</h5>
     {{Form::password('retypepassword',array('class' =>'form-control'));}}
     </div>
     <br>
     <div class="form-inline">
     {{Form::submit('Save And Login',array('class'=>'btn btn-primary','id'=>'btn_forms'));}}
     </div><br>
  {{ Form::close()}}
</div>
@stop
