{{ Form::open(array('action' => 'QuestionListController@countChoices', 'method' => 'PUT')) }}

    {{ Form::text('count', $numChoices, array('id'=>'noOfChoices')); }}

{{ Form::close() }}