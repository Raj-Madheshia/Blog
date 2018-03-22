@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="panel">
                            <a href="/posts/create" class="btn btn-primary btn-lg">Create Post</a>
                            <h1>Your Blog Posts</h1>
                            @if(count($posts)>0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                        @foreach($posts as $post)
                                            <tr> 
                                                <th>{{$post->title}}</th>
                                                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></th>
                                                <th>
                                                    {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST']) !!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                                    {!! Form::close() !!}
                                                </th>
                                            </tr>
                                        @endforeach
                                </table>
                            @else
                                <h3 style="color:royalblue">You Do not have any Post<h3>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
