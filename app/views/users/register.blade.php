
@extends('layouts.home')
@section('main')
<div class="area" align="center">
  {{Form::open(array('class'=>'form-inline','route'=>'user.store', 'method'=>'POST'))}}

    <div class="header"><br>
     <h3 align="center">Registration</h3>
     <hr></div><br>
     <div class="form group"><h5 class="password">Email:</h5>
     {{Form::text('email',null,array('class' =>'form-control','placeholder'=>'Email'));}}

     </div><br>
     <div class="form group"><h5 class="password">Password:</h5>
     {{Form::password('password',array('class' =>'form-control'));}}
     </div>
     <div class="form group"><h5 class="password">Retype-Password:</h5>
     {{Form::password('retypepassword',array('class' =>'form-control'));}}
     </div>
     <br><br>
        <div class="form-inline">
            {{Form::submit('Register And Login',array('class'=>'btn btn-primary','id'=>'btn_forms'));}}

        </div>
          @if ($errors->has())
            <br>
            @foreach ($errors->all() as $error)
            <br>
                {{ $error }}        
            @endforeach
        
         @endif
         
     <br>
     <br> 

  {{ Form::close()}}
</div>

@stop

