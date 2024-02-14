@extends("layouts.admin")

@section("content")
    @section("title", $ganre->title)

    <x-forms.form :action="route('admin.ganres.update', $ganre->id)" method="PATCH">
        <x-forms.input name="title" type="text" :value="old('title') ?? $ganre->title">
            Title
        </x-forms.input>

        <button type="submit" class="btn btn-success mb-3">Save</button>
    </x-forms.form>
@endsection

