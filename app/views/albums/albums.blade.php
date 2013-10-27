@extends('layout')
@section('content')
    <div class="list-group">
        @foreach($albums as $album)
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">{{$album->name}}</h4>
            <p class="list-group-item-text">{{$album->description}}</p>
        </a>
        @endforeach
    </div>
@stop