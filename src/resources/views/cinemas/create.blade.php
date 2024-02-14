@extends("layouts.admin")

@section("content")
    @section("title", "Create New Cinema")

    <x-forms.form :action="route('admin.cinemas.store')" method="POST">
        <x-forms.input name="title" type="text" :value="old('title')">
            Title
        </x-forms.input>
        <x-forms.input name="address" type="text" :value="old('address')">
            Address
        </x-forms.input>
        <button type="submit" class="btn btn-success">Create</button>
    </x-forms.form>
@endsection

