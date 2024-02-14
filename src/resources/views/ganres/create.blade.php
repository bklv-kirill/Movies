@extends("layouts.admin")

@section("content")
    @section("title", "Create New Ganre")

    <x-forms.form :action="route('admin.ganres.store')" method="POST">
        <x-forms.input name="title" type="text" :value="old('title')">
            Title
        </x-forms.input>

        <button type="submit" class="btn btn-success mb-3">Create</button>
    </x-forms.form>
@endsection

