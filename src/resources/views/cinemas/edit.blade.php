@extends("layouts.admin")

@section("content")
    @section("title", $cinema->title)

    <x-forms.form :action="route('admin.cinemas.update', $cinema->id)" method="PATCH">
        <x-forms.input name="title" type="text" :value="old('title') ?? $cinema->title">
            Title
        </x-forms.input>
        <x-forms.input name="address" type="text" :value="old('address') ?? $cinema->address">
            Address
        </x-forms.input>

        <button type="submit" class="btn btn-success mb-3">Save</button>
    </x-forms.form>
@endsection

