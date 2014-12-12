@extends('layouts.home')

@section('main')
    <div id="new-question" class="container col-md-12  left-col">
        {{ Form::open(array('url' => 'sessions.storequestion')) }}
            <h1 class="text-center">Qestion and Answer Trial</h1>
            <div class="form-group" align="center">
                {{ Form::text('question', 'What is question question hurray?', array('id'=>'question-area', 'class'=>'form-control','placeholder'=>'Write question here', 'disabled'=>'disabled')); }}
            </div>
            <br/>
            <div class="input-group col-md-10 col-md-offset-1">
                <span class="input-group-addon">
                    {{ Form::checkbox('name','value',false); }}
                </span>
                {{ Form::text('choice', 'string', array('class'=>'form-control choice', 'disabled'=>'disabled')); }}
            </div>
            <br/>
            <div class="input-group col-md-10 col-md-offset-1">
                <span class="input-group-addon">
                    {{ Form::checkbox('name','value',false); }}
                </span>
                {{ Form::text('choice','string', array('class'=>'form-control choice', 'disabled'=>'disabled')); }}
            </div>
            <br/>
            <div class="input-group col-md-10 col-md-offset-1">
                <span class="input-group-addon">
                    {{ Form::checkbox('name','value',false); }}
                </span>
                {{ Form::text('choice', 'string', array('class'=>'form-control choice', 'disabled'=>'disabled')); }}
            </div>
            <br/>
            <!-- <button type="button" class="btn btn-default col-md-offset-8">Add Choice</button>
            <br/> -->
            <br/>
            <p>Result: <span class="label label-success">CORRECT</span></p>
            <button type="button" class="btn btn-primary col-md-offset-10">Check</button>
        {{ Form::close() }}
    </div>
@stop