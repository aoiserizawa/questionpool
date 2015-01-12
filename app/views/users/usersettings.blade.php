@extends('layouts.home')
@section('main')
<div class="area" align="center">
  {{Form::open(array('action'=>'UsersController@update','method'=>'POST'))}}
  <?php
     $user= DB::table('users')->where('id','=','3')->first();
  ?>

    <div class="header" align="center"><br>
     <h4>User Settings</h4><hr>
     </div>
     <div class="form-inline"><h5 class="password">&nbspEmail:</h5>
     {{Form::text('email',$user->email,array('class' =>'form-control'));}}
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
     {{Form::submit('Save And Edit',array('class'=>'btn btn-primary','id'=>'btn_forms'));}}
     </div>
     @if ($errors->has())
            <br>
            @foreach ($errors->all() as $error)
            <br>
                {{ $error }}        
            @endforeach
        
         @endif<br>
  {{ Form::close()}}
</div>
@stop
