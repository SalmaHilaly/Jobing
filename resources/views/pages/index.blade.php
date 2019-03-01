@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To <b>Jobing!</b></h1>
        <p>We help you Finding your Dream Job...</p>
        @if(Auth::guest())
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
        <br>
        <p><a class="btn btn-warning btn-lg" href="/posts" role="button">View All Posts</a></p>
    </div>
@endsection