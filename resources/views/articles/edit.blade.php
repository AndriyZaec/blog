@extends('app')

@section('title')
    Edit
@stop

@section('content')
    <h1>Edit: {{ $article->title  }}</h1>
    <hr/>
    {!! Form::model($article,['method'=>'PATCH','action' => ['ArticlesController@update',$article->id]]) !!}
        @include('_form',['submitBtnText'=>'Update article'])
    {!! Form::close() !!}

    @include('errors.valid')
@stop