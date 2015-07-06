@extends('app')

@section('title')
    Create
@stop

@section('content')
    <h1>Write a new article</h1>
    <hr/>
        @include('_form',['submitBtnText'=>'Add article'])
    {!! Form::close() !!}

    @include('errors.valid')
@stop