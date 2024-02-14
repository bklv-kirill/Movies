@extends("layouts.admin")

@section("content")
    @section("title", "Main")

    <a href="{{ route("admin.movies.create") }}" class="btn btn-success mb-3">Create New Movie</a>

    @forelse($movies as $movie)
        <x-admin.item-card>
            <x-slot name="header">
                Movie №{{ $movie->id }}
            </x-slot>
            <h5 class="card-title">Title: <span class="text-primary">{{ $movie->title }}</span></h5>
            <p class="card-text">Description: <span class="text-primary">{{ $movie->description }}</span></p>
            <p class="card-text">Author: <span class="text-primary">{{ $movie->author->fullName() }}</span></p>
            <p class="card-text">Ganre: <span class="text-primary">{{ $movie->ganre->title }}</span></p>
            <p class="card-text">Release Date: <span
                    class="text-primary">{{ $movie->release_date->format("d.m.Y") }}</span></p>

            <div class="d-flex">
                @can("delete", $movie)
                    <x-forms.form :action="route('admin.movies.delete', $movie->id)" method="DELETE">
                        <button type="submit" class="btn btn-danger">Delete Movie</button>
                    </x-forms.form>
                @endcan

                @can("update", $movie)
                    <a href="{{ route("admin.movies.edit", $movie->id) }}" class="btn btn-primary ms-2">Edit</a>
                @endcan
            </div>

        </x-admin.item-card>
    @empty
        <h3 class="text-center">No Movies</h3>
    @endforelse

    {{ $movies->withQueryString()->links() }}

@endsection

