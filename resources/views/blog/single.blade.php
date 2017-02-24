@extends('main')

@section('title', "| $post->title")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <p>Posted In: {{ $post->category->name }}</p>
            @foreach($post->tags as $tag)
                <span class="label label-default">{{ $tag->name }}</span>
            @endforeach
        </div>
    </div>

@stop