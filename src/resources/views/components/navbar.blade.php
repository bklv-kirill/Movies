<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route("main") }}">Main</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ !\Illuminate\Support\Facades\Route::is("movies*") ?: "active" }}" aria-current="page" href="{{ route("movies.index") }}">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ !\Illuminate\Support\Facades\Route::is("cinemas*") ?: "active" }}" aria-current="page" href="{{ route("cinemas.index") }}">Cinemas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ !\Illuminate\Support\Facades\Route::is("authors*") ?: "active" }}" aria-current="page" href="{{ route("authors.index") }}">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ !\Illuminate\Support\Facades\Route::is("ganres*") ?: "active" }}" aria-current="page" href="{{ route("ganres.index") }}">Ganres</a>
                </li>
            </ul>
            @if(auth()->check())
                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropstart</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route("user.profile") }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route("user.logout") }}">Log Out</a></li>
                    </ul>
                    <a href="{{ route("user.profile") }}" class="btn btn-primary">
                        {{ auth()->user()->name }}
                    </a>
                </div>
            @else
                <a href="{{ route("user.login") }}">Log In</a>
            @endif
        </div>
    </div>
</nav>
