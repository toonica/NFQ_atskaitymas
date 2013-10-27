@extends("layout")
@section("content")
    {{ Form::open([
        "route"        => "user/login",
        "autocomplete" => "off",
        "class"=>"form-login"
    ]) }}
    {{ Form::label("username", "Username") }}
    {{ Form::text("username", Input::old("username"), [
        "placeholder" => "username"
    ]) }}
    {{ Form::label("password", "Password") }}
    {{ Form::password("password", [
        "placeholder" => "●●●●●●●●●●"
    ]) }}
    {{ Form::submit("login") }}
    {{ Form::close() }}
    @if ($error = $errors->first("password"))
        <div class="error">
            {{ $error }}
        </div>
    @endif
@stop

