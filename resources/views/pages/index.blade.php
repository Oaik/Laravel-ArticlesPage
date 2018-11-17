@extends('layouts.app')
    @section('content')
    <div class="jumbotron ">
        <h1 class="display-4">Welcome To {{$title}}</h1>
        <p class="lead">Here all the latest blogs</p>
        <hr class="my-4">
        <div class="text-center">
            <a class="btn btn-primary btn-lg display-5" href="/login" role="button">Login</a>
            <a class="btn btn-outline-primary btn-lg" href="/register" role="button">Register</a>
        </div>
    </div>
    @endsection
