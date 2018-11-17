@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary mb-4 mt-2">Create A Post</a>
                    @if(count($posts) > 0)
                        <h3>Your Blog Posts</h3>
                        <div class="heading">
                            <h4>Title</h4>
                        </div>
                        @foreach ($posts as $post)
                            <div class="post">
                                <a href="/posts/{{$post->id}}/"><span>{{$post->title}}</span></a>
                                <a class="btn btn-dark float-right" href="/posts/{{$post->id}}/edit"><span>edit</span></a>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close() !!}
                            </div>
                            <div class="clearfix"></div>
                        @endforeach
                    @else
                        <h3>You Have No Posts</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
