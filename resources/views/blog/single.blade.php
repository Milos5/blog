@extends('main')

@section('title', "| ".htmlspecialchars($post->title))

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{ asset('images/' . $post->image) }}" height="400" width="800"/>
            <h1>{{ $post->title }}</h1>
            <p>{!! $post->body !!}</p>
            <p>Posted In: {{ $post->category->name }}</p>
            @foreach($post->tags as $tag)
                <span class="label label-default">{{ $tag->name }}</span>
            @endforeach
        </div>
    </div>
    <hr>
    <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2">
            {!!  Form::open(['route'=>['comments.store',$post->id ],'method'=>'POST']) !!}
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name',"Name:") }}
                    {{ Form::text('name',null,['class'=>'form-control']) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('email',"Email:") }}
                    {{ Form::text('email',null,['class'=>'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{ Form::label('comment',"Comment:") }}
                    {{ Form::textarea('comment',null,['class'=>'form-control','rows'=>'5']) }}

                    {{ Form::submit('Add Comment',['class'=>'btn btn-success btn-block form-spacing-top']) }}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 form-spacing-top">
            <h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>{{ $post->comments()->count() }} Comments</h3>
            {{--{{dd($post->comments)}}--}}
            @foreach($post->comments->reverse() as $comment)
                <div class="comment">
                    <div class="author-info">
                        <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=identicon" }}" class="author-image">
                            <div class="author-name">
                                <h4>{{ $comment->name }}</h4>
                                {{--<p class="author-time">{{ date('j. M Y. H:i', strtotime($comment->created_at)) }}</p>--}}
                                <p class="author-time">{{ $comment->updated_at->diffForHumans() }}</p>
                            </div>


                    </div>
                    <div class="comment-content">
                        {{ $comment->comment }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop

