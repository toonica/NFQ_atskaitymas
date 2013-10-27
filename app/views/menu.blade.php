
<ul class="nav nav-justified">
    @if (Auth::check())
        <li><a href="{{ URL::route("user/logout") }}">
            logout
        </a></li>
        <li><a href="/create">
            sukurti albumą
        </a></li>
    <li><a href="/albums">
    albumai
    </a></li>
    @else
        <li><a href="{{ URL::route("user/login") }}">
    login
        </a></li>

    @endif
</ul>

