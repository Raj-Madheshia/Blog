@extends('layout.app')
@section('content')
<h1>{{$title}}</h1>
@if(count($elements)>0)
    <ul class="list-group">
        @foreach($elements as $element)
            <li class="list-group-item">{{$element}}</li>
        @endforeach
    </ul>
@endif
@endsection