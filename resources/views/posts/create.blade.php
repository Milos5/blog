@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
           selector: 'textarea',
            menubar: false
        });
    </script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>
                Create New Post
            </h1>

            <hr>

            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '','files'=> true]) !!}

                {{ Form::label('title', 'Tittle:') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255' ]) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, ['class'=>'form-control','required'=>'', 'minlength'=>'5', 'maxlength'=>'255']) }}

                {{ Form::label('category', 'Category:') }}

                {{ Form::select('category_id', $categories, null, ['class'=>'form-control']) }}

                {{ Form::label('tags', 'Tags:') }}
                <select name="tags[]" class="form-control select2-multi" multiple="multiple">
                    @foreach($tags as $tag)

                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                    @endforeach
                </select>

            {{ Form::label('featured_image','Upload Featured Image:') }}
            {{ Form::file('featured_image') }}


                {{ Form::label('body', "Post Body:") }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}

                {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px']) }}

            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script class="text/javascript">
        $('.select2-multi').select2();
    </script>


@endsection