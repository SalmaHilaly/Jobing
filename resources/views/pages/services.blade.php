@extends('layouts.app')

@section('content')
    <h1><b>{{$title}}</b></h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
    <br>
    <h4>Contact Us:</h4>
    <h5 style="color:mediumblue; margin-left:15px">contact@jobing.com</h5>
@endsection