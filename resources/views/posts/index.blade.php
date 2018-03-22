@extends('layouts.app')

@section('content')
<h1>Posts</h1>
    @if(count($posts) > 0)
        <ul class="list-group"> 
        @foreach($posts as $post)
            <div>
                <li class="list-group-item">
                    <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </li>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>NO POST</p>
    @endif
@endsection