@extends('layouts.home')

@section('main')
        <table class="table-bordered col-md-12">
            <thead> 
                <tr>
                    <th class="container"><h1>Questions</h1></th>
                </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
                <tr>
                    <td class="container">{{ link_to("/questionlist/{$question->id}/edit", $question->questions) }}<button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr>
            @endforeach

                <!-- <tr>
                    <td class="container"><a href="/questionpreview">Who is...?</a><button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr> -->
            </tbody>
        </table>

        </br>
        </br>

            {{ $questions->links() }}
@stop