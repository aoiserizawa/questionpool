@extends('layouts.home')
@section('main')
<div class="area" align="center">
  {{Form::open(array('class'=>'form-inline','url'=>'sessions.store'))}}
    <div class="header"><br>
     <h3 align="center">Registration</h3>
     <hr></div><br>
     <div class="form group"><h5 class="password">Email:</h5>
     {{Form::text('mailuser',null,array('class' =>'form-control','placeholder'=>'Username/Email'));}}
     </div><br>
     <div class="form group"><h5 class="password">Password:</h5>
     {{Form::password('password',array('class' =>'form-control'));}}
     </div>
     <div class="form group"><h5 class="password">Retype-Password:</h5>
     {{Form::password('retypepassword',array('class' =>'form-control'));}}
     </div>
     <br><br>
        <div class="form-inline">
            {{Form::submit('Register And Login',array('class'=>'btn btn-primary','id'=>'btnRon'));}}
        </div>
     
     <br>
     <br> 
  {{ Form::close()}}
</div>
@stop

