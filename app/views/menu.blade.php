

@if (Auth::check())
    <a href="{{ URL::route("user/logout") }}">
logout
    </a>
@else
    <a href="{{ URL::route("user/login") }}">
login
    </a>
@endif

