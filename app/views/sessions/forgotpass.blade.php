@extends('layouts.home')
@section('style')
<style>
.area {
    border: 1px solid black;
    border-radius: 8px;
      -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
      -moz-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       width: 450px;
       margin: 0 auto;
       padding-left: 10px;
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
     <h3>&nbspForgot Password</h3>
     </div><br>
     <div class="form group col-md-12">
     {{Form::text('email',null,array('class' =>'form-control','placeholder'=>'Email'));}}
     </div><br>
     <br><br>
     <div class="form group col-md-offset-10">
     {{Form::submit('Send',array('class'=>'btn btn-primary'));}}
     </div>
     <br>

    
  {{ Form::close()}}
</div>
@stop
