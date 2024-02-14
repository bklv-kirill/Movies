@extends("layouts.admin")

@section("content")
    @section("title", "Create New Movie")

    <x-forms.form :action="route('admin.movies.store')" method="POST">
        <x-forms.input name="title" type="text" :value="old('title')">
            Title
        </x-forms.input>
        <x-forms.textarea name="description" :value="old('description')">
            Description
        </x-forms.textarea>
        <x-forms.input name="release_date" type="date" :value="old('release_date')">
            Release Date
        </x-forms.input>
        <x-forms.select name="ganre_id" span="Ganre">
            @forelse($ganres as $ganre)
                <option value="{{ $ganre->id }}">{{ $ganre->title }}</option>
            @empty
            @endforelse
        </x-forms.select>
        <x-forms.select name="author_id" span="Author">
            @forelse($authors as $author)
                <option value="{{ $author->id }}">{{ $author->fullName() }}</option>
            @empty
            @endforelse
        </x-forms.select>

        <div class="mb-3">

            <h3>Cinemas</h3>

            @if($errors->has("cinemas"))
                <div class="form-text text-danger mb-2">{{ $errors->first("cinemas") }}</div>
            @endif
            @forelse($cinemas as $cinema)
                <x-forms.checkbox name="cinemas[]" :value="$cinema->id" :checked="in_array($cinema->id, old('cinemas') ?? [])">
                    {{ $cinema->title }}
                </x-forms.checkbox>
            @empty
            @endforelse

        </div>


        <button type="submit" class="btn btn-success mb-3">Create</button>
    </x-forms.form>
@endsection

