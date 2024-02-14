@extends("layouts.admin")

@section("content")
    @section("title", "Create New Author")

    <x-forms.form :action="route('admin.authors.update', $author->id)" method="PATCH">
        <x-forms.input name="first_name" type="text" :value="old('first_name') ?? $author->first_name">
            First Name
        </x-forms.input>
        <x-forms.input name="last_name" type="text" :value="old('last_name') ?? $author->last_name">
            Last Name
        </x-forms.input>
        <x-forms.input name="birthday" type="date" :value="old('birthday') ?? $author->birthday->format('Y-m-d')">
            Birthday
        </x-forms.input>
        <x-forms.select name="gender" span="Gender">
            <option value="male" selected>Male</option>
            <option value="female" @selected($author->gender === "Female")>Female</option>
        </x-forms.select>
        <button type="submit" class="btn btn-success">Save</button>
    </x-forms.form>
@endsection

