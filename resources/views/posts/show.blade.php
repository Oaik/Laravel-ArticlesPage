@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-dark mt-3">Go Back</a>
<h1 class="mt-4">{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <p>Written on {{$post -> created_at}} by {{$post->user->name}}</p>
    <br>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}
    <hr>
        @endif
    @endif
@endsection