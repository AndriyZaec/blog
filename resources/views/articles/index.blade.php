@extends('app')

@section('title')
    index
@stop

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)
        <div class="panel-default">
            <div class="panel-heading">
                {{$article->title}}
            </div>

            <div class="panel-body">{{$article->body}}</div>
        </div>
    @endforeach
@stop