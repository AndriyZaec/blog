@extends('app')

@section('title')

@stop

@section('content')
        <div class="panel-default">
            <div class="panel-heading">
                {{$article->title}}
            </div>

            <div class="panel-body">{{$article->body}}</div>
        </div>
@stop