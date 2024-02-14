@extends("layouts.main")

@section("content")
    @section("title", "Movies")

    <x-forms.form :action="route('movies.index')" method="GET" class="mb-3">
        <x-forms.input name="title" type="text" :value="$filters['title'] ?? ''">
            Title
        </x-forms.input>

        <x-forms.select name="ganre_id" span="Ganre" firstOption="All Ganres">
            @forelse($ganres as $ganre)
                <option value="{{ $ganre->id }}" @selected($filters["ganre_id"] == $ganre->id)>{{ $ganre->title }}</option>
            @empty
            @endforelse
        </x-forms.select>

        <x-forms.select name="author_id" span="Author" firstOption="All Authors">
            @forelse($authors as $author)
                <option value="{{ $author->id }}" @selected($filters["author_id"] == $author->id)>{{ $author->fullName() }}</option>
            @empty
            @endforelse
        </x-forms.select>

        <button type="submit" class="btn btn-primary">Search</button>
    </x-forms.form>

    @forelse($movies as $movie)
        <x-movies.movie-card :movie="$movie">
            <a href="{{ route("movies.show", $movie) }}" class="btn btn-primary">Show More</a>
        </x-movies.movie-card>
    @empty
        <h2 class="text-center m-3">No Movies</h2>
    @endforelse

    {{ $movies->withQueryString()->links() }}
@endsection
