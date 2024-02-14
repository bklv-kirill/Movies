@extends("layouts.main")

@section("content")
    @section("title", "Ganres")

    <x-table firstColumn="Ganre" secondColumn="Movies">
        @forelse($ganres as $ganre)
            <tr>
                <td><a href="{{ route("ganres.show", $ganre) }}">{{ $ganre->title }}</a></td>
                <td><a href="/movies?ganre_id={{ $ganre->id }}">{{ $ganre->movies->count() }}</a></td>
            </tr>
        @empty
            <tr>
                <td>No Ganres</td>
                <td>No Movies</td>
            </tr>
        @endforelse
    </x-table>

@endsection
