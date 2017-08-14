@extends('layouts.default')


@section('content')

<div class="content">
    
    <div class="links">
        <a href="{{ url('/articles/add') }}">Rédiger un article</a><br>
    </div>
    
    @foreach($articles as $article)
        <section class="post">
              <header class="entry-header">
                <img class="entry-avatar" alt="Paul Laros" height="52" width="52" src="http://www.gravatar.com/avatar/ea67e860739cd91fe40b6797e97e6820.jpg?s=52">
                <h2 class="entry-title"><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
                <p class="entry-meta">
                  Posted on <a class="entry-date" href="date.html">July 19, 2013</a> | By <a class="entry-author" href="author.html">Paul Laros</a> | Tags <a class="label label-danger" href="tag.html">CSS3</a>
                </p>
              </header>
              <div class="entry-description">
                <p>
                  {{$article->description}}
                </p>
              </div>
        </section>
    @endforeach
</div>
@stop