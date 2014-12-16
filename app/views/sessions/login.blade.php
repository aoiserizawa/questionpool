@extends('layouts.home')
@section('main')
<div class="area" align="center">
  {{Form::open(array('class'=>'form-inline','route'=>'login.store', 'method'=>'POST'))}}
    <div class="header"><br>
     <h3 align="center">USER LOG-IN</h3>
     <hr></div><br>
     <div class="form group">
     {{Form::text('email',null,array('class'=>'form-control','placeholder'=>'Email'));}}
     </div><br>
     <div class="form group">
     {{Form::password('password',array('class' =>'form-control'));}}
     </div>
     <br>
        <div>
          {{Form::submit('Login',array('class'=>'btn btn-primary','id'=>'btn_forms'));}}
          
        </div>
     
     <br>
     <div align="left">
        &nbsp&nbsp&nbsp&nbsp<a href="retrievepass" >Forgot Password?</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="user/create" >Register</a>
     </div>
     
      @if ($errors->has())
            
            @foreach ($errors->all() as $error)
            <br>
                {{ $error }}        
            @endforeach
            <br>        
         @endif
         <br>
            
  {{ Form::close()}}
</div>
@stop

