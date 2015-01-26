@extends('layouts.home')

@section('main')
    <div id="new-question" class="container col-md-12  left-col">
        {{ Form::open(array('action' => 'QuestionListController@update', 'method' => 'PUT')) }}
            <h1 class="text-center">Qestion Preview</h1>
            <div class="form-group" align="center">
                {{ Form::text('question', $questions->questions, array('id'=>'question-area', 'class'=>'form-control','placeholder'=>'Write question here')); }}
            </div>
            <br/>
                {{ Form::hidden('hidden', $questions_id, array('id'=>'question_id')); }}
            <div id="choicesArea">
            

            @foreach($choice as $choices)
                <div class="input-group col-md-10 col-md-offset-1">
                @if($choices->flag == 0)
                    <span class="input-group-addon">
                        {{ Form::checkbox('flag[1]','value',false); }}
                    </span>
                @else
                    <span class="input-group-addon">
                        {{ Form::checkbox('flag[1]','value',true); }}
                    </span>
                @endif
                    {{ Form::text('choice[1]',$choices->choice, array('class'=>'form-control choice')); }}
                </div>
                <br/>
            @endforeach

                <!-- <div class="input-group col-md-10 col-md-offset-1">
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
                </div> -->
            </div>    
            <br/>
            <button id="addChoiceBtn" type="button" class="btn btn-default col-md-offset-8">Add Choice</button>
            <br/>
            <br/>
            {{ Form::submit('Delete', array('class'=>'btn btn-primary', 'style'=>'float:left', 'id' => 'delete')) }}
            <!-- <button style:"float:left" type="button" class="btn btn-primary">Delete</button> -->
            {{ Form::submit('Save Edit', array('class'=>'btn btn-primary col-md-offset-9', 'style'=>'float:right', 'id' => 'save')) }}
            <!-- <button style:"float:right" type="button" class="btn btn-primary col-md-offset-9">Save Edit</button> -->
        {{ Form::close() }}
    </div>
    <script id="choice-template" type="text/html">
        <div class="input-group col-md-10 col-md-offset-1">
            <span class="input-group-addon">
                <input name="flag[[NUMBER]]" type="checkbox" value="value">
            </span>
            <input type="text" class="form-control choice" name="choice[[NUMBER]]"/>
        </div>
        </br>
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
            });
            return template; 
        }   


        $('#addChoiceBtn').click(function(){
            var questionId = $('#question_id').val();
            var data    = 'id='+ questionId;
            var url    = '/questionlist/choicecount';
            $.post(url, data, function(result){
                 $.each(result, function(key, value){
                    console.log(value);
                    var num = value + 1;
                    alert(num);
                 });
                 
            });
   });

            // if(choiceCount<=5)
            // {
            //     choiceCount+=1;
            //     num+=1;
            //     console.log(choiceCount);
            //     var html = template('#choice-template', {
            //         number : num
            //     });
            //     $('#choicesArea').append(html);
            // }
            // else
            // {   
            //     $('#choicesArea').append('<br/><span class="label label-danger">Choice Limit Reached</span>');
            // }
        // });
    });
    </script>
@stop