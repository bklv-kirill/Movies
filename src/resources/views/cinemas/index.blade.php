@extends("layouts.main")

@section("content")
    @section("title", "Cinemas")

    <x-forms.form :action="route('cinemas.index')" method="GET" class="mb-3">
        <x-forms.input name="title" type="text" :value="$filters['title'] ?? ''">
            Title
        </x-forms.input>

        <button type="submit" class="btn btn-primary">Search</button>
    </x-forms.form>

    @forelse($cinemas as $cinema)
        <x-cinemas.cinema-card :cinema="$cinema">
            <a href="{{ route("cinemas.show", $cinema) }}" class="btn btn-primary">Show More</a>
        </x-cinemas.cinema-card>
    @empty
        <h2 class="text-center mt-3">No Cinemas</h2>
    @endforelse

    {{ $cinemas->withQueryString()->links() }}
@endsection
