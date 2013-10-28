@extends("layout")
@section("content")

{{ Form::open([
    "route"        => "albums/create",
    "autocomplete" => "off",
    "class"=>"form-new-album"
]) }}

@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

    <div class="form-group">
        {{ Form::label("name", "Pavadinimas") }}

        @if ($error = $errors->first("name"))
            <div class="alert alert-danger">
               {{ $error }}.
            </div>
        @endif

        {{ Form::text("name", '', [
        "placeholder" => "Pavadinimas",
        "class"=>"form-control"
        ]) }}
    </div>
    <div class="form-group">
        {{ Form::label("description", "Trumpas aprašymas") }}
        @if ($error = $errors->first("description"))
            <div class="alert alert-danger">
                {{ $error }}.
            </div>
        @endif
        {{ Form::text("description", '', [
        "placeholder" => "Trumpas aprašymas",
        "class"=>"form-control"
        ]) }}
    </div>
    <div class="form-group">
        {{ Form::label("allDescription", "Aprašymas") }}
        @if ($error = $errors->first("allDescription"))
            <div class="alert alert-danger">
                {{ $error }}.
            </div>
        @endif
        {{ Form::text("allDescription", '', [
        "placeholder" => "Aprašymas",
        "class"=>"form-control"
        ]) }}
    </div>
    <div class="form-group">
        {{ Form::label("location", "Vieta") }}
        @if ($error = $errors->first("location"))
            <div class="alert alert-danger">
                {{ $error }}.
            </div>
        @endif
        {{ Form::text("location", '', [
        "placeholder" => "Vieta",
        "class"=>"form-control"
        ]) }}
    </div>
        {{ Form::submit("sukurti") }}
        {{ Form::close() }}
        @if ($error = $errors->first("password"))
             <div class="error">
                 {{ $error }}
             </div>
        @endif

@stop