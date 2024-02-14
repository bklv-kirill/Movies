@extends("layouts.main")

@section("content")
    @section("title", $ganre->title)

    <h2>Ganre: <span class="text-primary">{{ $ganre->title }}</span></h2>

    <x-table firstColumn="Movie" secondColumn="Author">
        @forelse($ganre->movies as $movie)
            <tr>
                <td><a href="{{ route("movies.show", $movie) }}">{{ $movie->title }}</a></td>
                <td><a href="{{ route("authors.show", $movie->author) }}">{{ $movie->author->fullName() }}</a></td>
            </tr>
        @empty
            <tr>
                <td>No Movies</td>
                <td>No Authors</td>
            </tr>
        @endforelse
    </x-table>

@endsection
