@extends('layouts.app')

@section('content')
    <h1 class="mt-2">Create A Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title For the Post') }}
            {{ Form::text('title', '' ,['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Content') }}
            {{ Form::textarea('body', '' ,['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content...']) }}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{ Form::submit('Publish Post', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}    
@endsection
