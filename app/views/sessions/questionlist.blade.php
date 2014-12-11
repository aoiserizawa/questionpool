@extends('layouts.home')

@section('main')
<table class="table-bordered col-md-12">
            <thead> 
                <tr>
                    <th class="container"><h1>Questions</h1></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="container">Who is the creator of facebook? <button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr>
                <tr>
                    <td class="container">Who is...? <button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr>
                <tr>
                    <td class="container">What is...? <button type="button" class="pull-right btn btn-primary">Try</button></td>
                </tr>
            </tbody>
        </table>

        </br>
        </br>

        <nav>
            <ul class="pagination">
                <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Next</span></a></li>
            </ul>
        </nav>
@stop