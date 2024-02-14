@extends("layouts.main")

@section("content")
    @section("title", $movie->title)


    <x-movies.movie-card :movie="$movie">
        <p class="card-text">Author: <a
                href="{{ route("authors.show", $movie->author) }}">{{ $movie->author->fullName() }}</a></p>
        <p class="card-text">Ganre: <a href="{{ route("ganres.show", $movie->ganre) }}">{{ $movie->ganre->title }}</a>
        </p>

        @if(auth()->check())
            @if(\Illuminate\Support\Facades\Gate::check("add-movie-to-favorite", $movie))
                <x-forms.form :action="route('user.favorite-movies.store', $movie->id)" method="POST">
                    <button type="submit" class="btn btn-primary">Add Movie To Favorite</button>
                </x-forms.form>
            @else
                <x-forms.form :action="route('user.favorite-movies.delete', $movie->id)" method="DELETE">
                    <button type="submit" class="btn btn-danger">Delete From Favorite</button>
                </x-forms.form>
            @endif
        @endif
    </x-movies.movie-card>


    <x-table firstColumn="Cinema" secondColumn="Address">
        @forelse($movie->cinemas as $cinema)
            <tr>
                <td><a href="{{ route("cinemas.show", $cinema) }}">{{ $cinema->title }}</a></td>
                <td>{{ $cinema->address }}</td>
            </tr>
        @empty
            <tr>
                <td>No Cinemas</td>
                <td>No Address</td>
            </tr>
        @endforelse
    </x-table>

@endsection
