@extends("layouts.admin")

@section("content")
    @section("title", "Create New Author")

    <x-forms.form :action="route('admin.authors.store')" method="POST">
        <x-forms.input name="first_name" type="text" :value="old('first_name')">
            First Name
        </x-forms.input>
        <x-forms.input name="last_name" type="text" :value="old('last_name')">
            Last Name
        </x-forms.input>
        <x-forms.input name="birthday" type="date" :value="old('birthday')">
            Birthday
        </x-forms.input>
        <x-forms.select name="gender" span="Gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </x-forms.select>
        <button type="submit" class="btn btn-success">Create</button>
    </x-forms.form>
@endsection

