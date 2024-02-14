@extends("layouts.main")

@section("content")
    @section("title", $author->fullName())

    <div class="d-flex flex-wrap flex-column align-items-center">
        <x-authors.author-card :author="$author" temp="true"/>

        @if(\Illuminate\Support\Facades\Gate::check("add-author-to-favorite", $author))
            <x-forms.form :action="route('user.favorite-authors.store', $author->id)" method="POST">
                <button type="submit" class="btn btn-primary">Add Author To Favorite</button>
            </x-forms.form>
        @else
            <x-forms.form :action="route('user.favorite-authors.delete', $author->id)" method="DELETE">
                <button type="submit" class="btn btn-danger">Delete Author From Favorite</button>
            </x-forms.form>
        @endif
    </div>

    <x-table firstColumn="Movie" secondColumn="Ganre">
        @forelse($author->movies as $movie)
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

    <x-table firstColumn="Ganre" secondColumn="Movies">
        @forelse($author->ganres as $ganre)
            <tr>
                <td><a href="{{ route("ganres.show", $ganre) }}">{{ $ganre->title }}</a></td>
                <td><a href="/movies?ganre_id={{ $ganre->id }}&author_id={{ $author->id }}">{{ $ganre->movies->count() }}</a></td>
            </tr>
        @empty
            <tr>
                <td>No Ganres</td>
                <td>No Movies</td>
            </tr>
        @endforelse
    </x-table>
@endsection
