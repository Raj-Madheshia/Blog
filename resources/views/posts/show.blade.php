@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-primary btn-lg" style="margin-top:30px">GO BACK</a>
<div><h1>{{$post->title}}</h1>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
</div>
<hr>


    <div class="row">
        <div class="pull-left">
                <a href="/posts/{{$post->id}}/edit" class='btn btn-warning'>EDIT</a>
                <span class="glyphicon glyphicon-chevron-left"></span>
         </div>
        
         <div class="pull-right" style="margin-left:40px">
                {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
         </div>
    </div>
@endsection 