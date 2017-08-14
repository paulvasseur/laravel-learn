@extends('layouts.default')


@section('content')
    {!! Form::open(['action' => 'ArticlesController@add']) !!}
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Titre de l'article</label>
            <input type="text" class="form-control title" id="title" aria-describedby="title" placeholder="Entrer un titre">
            <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="description">Description de l'article</label>
            <div id="toolbar"></div>
            <div style="width:100%" id="editor"></div>
            <small id="descriptionHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        
    </div>
    {!! Form::close() !!}

    <div class="col-md-6">
        <h3>Preview de l'article</h3>
        <hr>
        <h2 style="text-align:center" class="preview-title"></h2>
        <hr style="width:50%;text-align:center">
        <div class="preview-desc"></div>
    </div>    
@stop

