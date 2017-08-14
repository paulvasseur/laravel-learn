@extends('layouts.default')


@section('content')
    {!! Form::open(['action' => 'ArticlesController@add']) !!}
        <div class="form-group" style="width:50%">
            <label for="title">Titre de l'article</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Entrer un titre">
            <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group"  style="width:50%">
            <label for="description">Description de l'article</label>
            <div id="toolbar"></div>
            <div id="editor"></div>
            <small id="descriptionHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        

    {!! Form::close() !!}
@stop

<div class="preview">


</div>