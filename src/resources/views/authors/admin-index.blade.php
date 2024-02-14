@extends("layouts.admin")

@section("content")
    @section("title", "Authors")

    <a href="{{ route("admin.authors.create") }}" class="btn btn-success mb-3">Create New Author</a>

    @forelse($authors as $author)
        <x-admin.item-card>
            <x-slot name="header">
                Author №{{ $author->id }}
            </x-slot>
            <h5 class="card-title">Name: <span class="text-primary">{{ $author->fullName() }}</span></h5>
            <p class="card-text">Age: <span class="text-primary">{{ $author->getAge() }}</span></p>
            <p class="card-text">Birthday: <span
                    class="text-primary">{{ $author->birthday->format("d.m.Y") }}</span></p>
            <p class="card-text">Gender: <span class="text-primary">{{ $author->gender }}</span></p>
            <p class="card-text">Movies: <span class="text-primary">{{ $author->movies->count() }}</span></p>

            <div class="d-flex">
                @can("delete", $author)
                    <x-forms.form :action="route('admin.authors.delete', $author->id)" method="DELETE">
                        <button type="submit" class="btn btn-danger">Delete Author</button>
                    </x-forms.form>
                @endcan

                @can("update", $author)
                    <a href="{{ route("admin.authors.edit", $author->id) }}" class="btn btn-primary ms-2">Edit</a>
                @endcan
            </div>

        </x-admin.item-card>
    @empty
        <h3 class="text-center">No Movies</h3>
    @endforelse

    {{ $authors->withQueryString()->links() }}

@endsection

