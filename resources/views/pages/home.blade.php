@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">{{$title}}</h1>
        <p>This is the Blog where you can post anyThing you want to post. Post will be seen to other persons. This will help our society to make better future</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register </a>
        </p>
      </div>
    </div>
@endsection
