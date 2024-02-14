@extends("layouts.main")

@section("content")
    @section("title", "Favorite Movies")

    <h2 class="text-center"><span class="text-primary">{{ $user->name }}'s</span> Favorite Authors</h2>
    <hr>

    <div class="d-flex flex-wrap flex-column align-items-center">
        @forelse($authors as $author)
            <x-authors.author-card :author="$author" route="user.favorite-authors.show"/>
        @empty
            <h2 class="text-center">No Authors</h2>
        @endforelse
    </div>
    {{ $authors->withQueryString()->links() }}
@endsection
