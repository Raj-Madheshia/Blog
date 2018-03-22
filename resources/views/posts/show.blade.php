@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-primary btn-lg">GO BACK</a>
<div><h1>{{$post->title}}</h1>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
</div>
@endsection