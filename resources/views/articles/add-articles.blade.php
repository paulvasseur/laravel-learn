@extends('layouts.default')


@section('content')
    {!! Form::open(['action' => 'ArticlesController@add','name'=>'sended']) !!}
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Titre de l'article</label>
            <input name="title" type="text" class="form-control title" id="title" aria-describedby="title" placeholder="Entrer un titre">
            <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="description">Description de l'article</label>
            <div id="toolbar"></div>
            <div style="width:100%;max-height:500px" id="editor"></div>
            <textarea id="this_desc" style="display:none" name='this_desc'></textarea>
            <small id="descriptionHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        
        <div class="form-group">
            <input type="submit" class="submit btn btn-primary" value="Publier">
        </div>
        
    </div>
    <div class="col-md-6">
        <h3>Preview de l'article</h3>
        <hr>
        <h2 style="text-align:center" class="preview-title"></h2>
        <hr style="width:50%;text-align:center">
        <div class="preview-desc"></div>
    </div> 
    {!! Form::close() !!}

<script>
    $(function(){
        $('.submit').click(function () {
            var mysave = $('.ql-editor').html();
            $('#this_desc').val(mysave);
        });
    });
</script>
       
@stop

