

@if (Auth::check())
    <a href="{{ URL::route("user/logout") }}">
        logout
    </a>
    <a href="/create">
        sukurti albumą
    </a>
<a href="/albums">
albumai
</a>
@else
    <a href="{{ URL::route("user/login") }}">
login
    </a>

@endif

