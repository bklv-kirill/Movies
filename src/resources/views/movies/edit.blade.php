@extends("layouts.admin")

@section("content")
    @section("title", $movie->title)

    <x-forms.form :action="route('admin.movies.update', $movie)" method="PATCH">
        <x-forms.input name="title" type="text" :value="old('title') ?? $movie->title">
            Title
        </x-forms.input>
        <x-forms.textarea name="description" :value="old('description') ?? $movie->description">
            Description
        </x-forms.textarea>
        <x-forms.input name="release_date" type="date"
                       :value="old('release_date') ?? $movie->release_date->format('Y-m-d')">
            Release Date
        </x-forms.input>
        <x-forms.select name="ganre_id" span="Ganre">
            @forelse($ganres as $ganre)
                <option value="{{ $ganre->id }}" @selected($movie->ganre->id === $ganre->id)>{{ $ganre->title }}</option>
            @empty
            @endforelse
        </x-forms.select>
        <x-forms.select name="author_id" span="Author">
            @forelse($authors as $author)
                <option value="{{ $author->id }}" @selected($movie->author->id === $author->id)>{{ $author->fullName() }}</option>
            @empty
            @endforelse
        </x-forms.select>

        <div class="mb-3">

            <h3>Cinemas</h3>

            @if($errors->has("cinemas"))
                <div class="form-text text-danger mb-2">{{ $errors->first("cinemas") }}</div>
            @endif
            @forelse($cinemas as $cinema)
                <x-forms.checkbox name="cinemas[]" :value="$cinema->id"
                                  :checked="in_array($cinema->id, old('cinemas') ?? $movieCinemas)">
                    {{ $cinema->title }}
                </x-forms.checkbox>
            @empty
            @endforelse

        </div>


        <button type="submit" class="btn btn-success mb-3">Save</button>
    </x-forms.form>
@endsection

