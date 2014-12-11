@extends('layouts.home')
@section('main')

<div class="area" align="center">
  {{Form::open(array('class'=>'form-inline','url'=>'sessions.store'))}}
    <div class="header"><br>
     <h3 align="center">USER LOG-IN</h3>
     <hr></div><br>
     <div class="form group">
     {{Form::text('usermail',null,array('class' =>'form-control','placeholder'=>'Username/Email'));}}
     </div><br>
     <div class="form group">
     {{Form::password('password',array('class' =>'form-control'));}}
     </div>
     <br>
        <div>
          {{Form::submit('Login',array('class'=>'btn btn-primary','id'=>'btnRon'));}}
          
        </div>
     
     <br>
     <div align="left">
        &nbsp&nbsp&nbsp&nbsp<a href="retrievepass" >Forgot Password?</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="retrievepass" >Register</a>
     </div>
     <br>    
  {{ Form::close()}}
</div>
@stop

