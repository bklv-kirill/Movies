@extends("layouts.main")

@section("content")
    @section("title", "Favorite Movies")

    <h2 class="text-center"><span class="text-primary">{{ $user->name }}'s</span> Favorite Movies</h2>
    <hr>

    @forelse($favoriteMovies as $movie)
        <x-movies.movie-card :movie="$movie">
            <a href="{{ route("user.favorite-movies.show", $movie->id) }}" class="btn btn-primary">Show More</a>
        </x-movies.movie-card>
    @empty
        <h2 class="text-center m-3">No Movies</h2>
    @endforelse

    {{ $favoriteMovies->withQueryString()->links() }}
@endsection
