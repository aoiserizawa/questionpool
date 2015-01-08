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
                    <td class="container"><a href="/questionpreview">{{ $question->questions }}</a><button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr>
            @endforeach

                <!-- <tr>
                    <td class="container"><a href="/questionpreview">Who is...?</a><button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr>
                <tr>
                    <td class="container"><a href="/questionpreview">What is...?</a><button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr> -->
            </tbody>
        </table>

        </br>
        </br>
        
            {{ $questions->links() }}
        <!-- <nav>
            <ul class="pagination">
                <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
            </ul>
        </nav> -->
@stop