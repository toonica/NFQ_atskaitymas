@extends("layout")
@section("content")

{{ Form::open([
"route"        => "user/createAlbum",
"autocomplete" => "off"
]) }}
    {{ Form::label("name", "Pavadinimas") }}
    {{ Form::text("name", '', [
    "placeholder" => "Pavadinimas"
    ]) }}<br>
    {{ Form::label("description", "Trumpas aprašymas") }}
    {{ Form::text("description", '', [
    "placeholder" => "Trumpas aprašymas"
    ]) }}<br>
    {{ Form::label("allDescription", "Aprašymas") }}
    {{ Form::text("allDescription", '', [
    "placeholder" => "Aprašymas"
    ]) }}<br>
    {{ Form::label("location", "Vieta") }}
    {{ Form::text("location", '', [
    "placeholder" => "Vieta"
    ]) }}<br>
{{ Form::submit("sukurti") }}
{{ Form::close() }}
@if ($error = $errors->first("password"))
<div class="error">
    {{ $error }}
</div>
@endif

@stop