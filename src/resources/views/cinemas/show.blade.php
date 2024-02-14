@extends("layouts.main")

@section("content")
    @section("title", $cinema->title)

    <x-cinemas.cinema-card :cinema="$cinema"/>

    <x-table firstColumn="Movie" secondColumn="Ganre">
        @forelse($cinema->movies as $movie)
            <tr>
                <td><a href="{{ route("movies.show", $movie) }}">{{ $movie->title }}</a></td>
                <td><a href="{{ route("ganres.show", $movie->ganre) }}">{{ $movie->ganre->title }}</a></td>
            </tr>
        @empty
            <tr>
                <td>No Movies</td>
                <td>No Ganres</td>
            </tr>
        @endforelse
    </x-table>
@endsection
