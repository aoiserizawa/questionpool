@extends('layouts.home')
@section('main')
<div class="area">
  {{Form::open(array('action'=>'UsersController@retrievepass','method'=>'POST'))}}
    <div class="header" align="center"><br>
     <h3>&nbspForgot Password</h3><hr>
     </div><br>
     <div class="form group col-md-12">
     {{Form::text('email',null,array('class' =>'form-control','placeholder'=>'Email'));}}
     </div><br>
     <br><br>
     <div class="form group col-md-offset-5">
     {{Form::submit('Send',array('class'=>'btn btn-primary btn-sm','id'=>'btn_forms'));}}
     </div>
     <br>

    
  {{ Form::close()}}
</div>
@stop
