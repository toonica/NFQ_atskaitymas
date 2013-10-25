@extends('layout')
@section('content')

    @foreach($albums as $album)
    {{$album-> name}}<br>
@endforeach
@stop