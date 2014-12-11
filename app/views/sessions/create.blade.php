
@extends('layouts.home')
@section('style')
<style>
.area {
    border: 1px solid black;
    border-radius: 8px;
      -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
      -moz-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       width: 350px;
       margin: 0 auto;
       top: 500px;
}
h3{
  font-weight: bold;

}
</style>

@stop
@section('main')
<br><br><br><bn><br><br><br>
<div class="area" align="center">
  {{Form::open(array('class'=>'form-inline','url'=>'sessions.store'))}}
    <div><br>
     <h3 align="center">USER LOG-IN</h3>
     </div><br>
     <div class="form group">
     {{Form::text('usermail',null,array('class' =>'form-control','placeholder'=>'Username/Email'));}}
     </div><br>
     <div class="form group">
     {{Form::password('password',array('class' =>'form-control'));}}
     </div>
     <br>
     <div class="row">
        <div class="form group">
          {{Form::submit('Login',array('class'=>'form-control btn btn-primary'));}}
        </div>
     </div>
     <br>
     <div>
        <a href="retrievepass">Forgot Password</a>
     </div>
     <br>    
  {{ Form::close()}}
</div>
@stop

