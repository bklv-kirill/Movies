@extends("layouts.admin")

@section("content")
    @section("title", "Cinemas")

    <a href="{{ route("admin.cinemas.create") }}" class="btn btn-success mb-3">Create New Cinema</a>

    @forelse($cinemas as $cinema)
        <x-admin.item-card>
            <x-slot name="header">
                Cinema №{{ $cinema->id }}
            </x-slot>
            <h5 class="card-title">Title: <span class="text-primary">{{ $cinema->title }}</span></h5>
            <p class="card-text">Address: <span class="text-primary">{{ $cinema->address }}</span></p>

            <div class="d-flex">
                @can("delete", $cinema)
                    <x-forms.form :action="route('admin.cinemas.delete', $cinema->id)" method="DELETE">
                        <button type="submit" class="btn btn-danger">Delete Cinema</button>
                    </x-forms.form>
                @endcan

                @can("update", $cinema)
                    <a href="{{ route("admin.cinemas.edit", $cinema->id) }}" class="btn btn-primary ms-2">Edit</a>
                @endcan
            </div>

        </x-admin.item-card>
    @empty
        <h3 class="text-center">No Cinemas</h3>
    @endforelse

    {{ $cinemas->withQueryString()->links() }}

@endsection

