@extends('layouts.app')

@section('content')
    @if(!Auth::guest())
        <a href="/posts/create" class="btn btn-primary btn-lg">Create Post</a>
    @endif
    <h1><b>Posts</b></h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <!--  View the Image into its Post  -->
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4" style="width:20%">
                        <img style="width:90%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md- col-sm-">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>no posts found</p>
    @endif
@endsection