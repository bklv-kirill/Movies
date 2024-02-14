@extends("layouts.admin")

@section("content")
    @section("title", "Ganres")

    <a href="{{ route("admin.ganres.create") }}" class="btn btn-success mb-3">Create New Ganre</a>

    @forelse($ganres as $ganre)
        <x-admin.item-card>
            <x-slot name="header">
                Ganre №{{ $ganre->id }}
            </x-slot>
            <h5 class="card-title">Title: <span class="text-primary">{{ $ganre->title }}</span></h5>
            <p class="card-text">Movies: <span class="text-primary">{{ $ganre->movies->count() }}</span></p>


            <div class="d-flex">
                @can("delete", $ganre)
                    <x-forms.form :action="route('admin.ganres.delete', $ganre->id)" method="DELETE">
                        <button type="submit" class="btn btn-danger">Delete Ganre</button>
                    </x-forms.form>
                @endcan

                @can("update", $ganre)
                    <a href="{{ route("admin.ganres.edit", $ganre->id) }}" class="btn btn-primary ms-2">Edit</a>
                @endcan
            </div>
        </x-admin.item-card>
    @empty
        <h3 class="text-center">No Ganres</h3>
    @endforelse

    {{ $ganres->withQueryString()->links() }}
@endsection

