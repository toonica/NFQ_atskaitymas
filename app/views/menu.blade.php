

@if (Auth::check())
    <a href="{{ URL::route("user/logout") }}">
logout
    </a>
    <a href="/create">
    Sukurti
    </a>
@else
    <a href="{{ URL::route("user/login") }}">
login
    </a>
@endif

