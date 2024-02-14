@extends("layouts.main")

@section("content")
    @section("title", "Authors")

    <x-forms.form :action="route('authors.index')" method="GET" class="mb-3">
        <x-forms.input name="name" type="text" :value="$filters['name'] ?? ''">
            Name
        </x-forms.input>

        <x-forms.select name="order" span="Order By" firstOption="With Out Order">
            <option value="ageup" @selected($filters["order"] === "ageup")>Order By Age (Up)</option>
            <option value="agedown" @selected($filters["order"] === "agedown")>Order By Age (Down)</option>
            <option value="moviesup" @selected($filters["order"] === "moviesup")>Order By Movies (Up)</option>
            <option value="moviesdown" @selected($filters["order"] === "moviesdown")>Order By Movies (Down)</option>
        </x-forms.select>

        <button type="submit" class="btn btn-primary">Search</button>
    </x-forms.form>

    <div class="d-flex flex-wrap flex-column align-items-center">
        @forelse($authors as $author)
            <x-authors.author-card :author="$author"/>
        @empty
            <h2 class="text-center">No Authors</h2>
        @endforelse
    </div>
    {{ $authors->withQueryString()->links() }}

@endsection
