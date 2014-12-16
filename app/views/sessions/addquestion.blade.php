@extends('layouts.home')

@section('main')
    <div id="new-question" class="container col-md-12  left-col">
        {{ Form::open(['route' => 'addquestion.store']) }}  <!-- array('url' => 'sessions.storequestion') -->
            <h1 class="text-center">Add New Question</h1>
            <div class="form-group" align="center">
                {{ Form::text('question', null, array('id'=>'question-area', 'class'=>'form-control','placeholder'=>'Write question here')); }}
            </div>
            <br/>
            <div id="choicesArea">
                <div class="input-group col-md-10 col-md-offset-1">
                    <span class="input-group-addon">
                        {{ Form::checkbox('flag[1]','value',false); }}
                    </span>
                    {{ Form::text('choice[1]',null, array('class'=>'form-control choice')); }}
                </div>
                <br/>
                <div class="input-group col-md-10 col-md-offset-1">
                    <span class="input-group-addon">
                        {{ Form::checkbox('flag[2]','value',false); }}
                    </span>
                    {{ Form::text('choice[2]',null, array('class'=>'form-control choice')); }}
                </div>
                <br/>
                <div class="input-group col-md-10 col-md-offset-1">
                    <span class="input-group-addon">
                        {{ Form::checkbox('flag[3]','value',false); }}
                    </span>
                    {{ Form::text('choice[3]',null, array('class'=>'form-control choice')); }}
                </div>
            </div>
            <br/>
            <button id="addChoiceBtn" type="button" class="btn btn-default col-md-offset-8">Add Choice</button>
            <br/>
            <br/>
            {{ Form::submit('Save', array('class'=>'btn btn-primary col-md-offset-10', 'id' => 'save'))}}
            <!-- <button type="button" class="btn btn-primary col-md-offset-10">Save</button> -->
        {{ Form::close() }}
    </div>
    <script id="choice-template" type="text/html">
        <br/>
        <div class="input-group col-md-10 col-md-offset-1">
            <span class="input-group-addon">
                <input name="flag[[NUMBER]]" type="checkbox" value="value">
            </span>
            <input type="text" class="form-control choice" name="choice[[NUMBER]]"/>
        </div>
    </script>
@stop
@section('script')
    <script>
    $(document).ready(function(){
        var choiceCount = 3;
        var num = 3;
        var template = function(selector, obj) {
            var obj = obj ? obj : "";
            var template = $(selector).html();
            $.each(obj, function(key, value) {
                template = template.replace(new RegExp('\\['+key.toUpperCase()+'\\]',"g"), value);
                // "g" makes regexp global
            });
            return template; 
        }

        $('#addChoiceBtn').click(function(){
            if(choiceCount<=5)
            {
                choiceCount+=1;
                num+=1;
                console.log(num);
                var html = template('#choice-template', {
                    number : num
                });
                $('#choicesArea').append(html);
            }
            else
            {
                $('#choicesArea').append('<br/><span class="label label-danger">Choice Limit Reached</span>');
            }
        });
    });
    </script>
@stop