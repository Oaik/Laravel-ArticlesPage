@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <br>
            <div class="card container py-2">
                <div class="row">
                    <div class="col-md-4 col-sm-4 cover-image">
                    <img style="height:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 class="mt-3 px-2">
                            <a href="/posts/{{$post->id}}">{{$post ->title}}</a>
                        </h3>
                        <p>Written on {{$post -> created_at}} by {{$post->user->name}}</p>    
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-4"></div>
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection