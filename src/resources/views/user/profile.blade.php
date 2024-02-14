@extends("layouts.main")

@section("content")
    @section("title", "Profile")

    <h2 class="text-center"><span class="text-primary">{{ $user->name }}'s</span> Profile</h2>

    <x-forms.form :action="route('user.update')" method="PATCH">
        <x-forms.input name="name" type="text" :value="old('name') ?? $user->name">
            Name
        </x-forms.input>
        <x-forms.input name="password" type="password">
            Password
        </x-forms.input>

        <button type="submit" class="btn btn-primary">Save</button>
    </x-forms.form>
    <hr>
    <x-forms.form :action="route('user.delete')" method="DELETE">
        <button type="submit" class="btn btn-danger">Delete Account</button>
    </x-forms.form>

    <hr>

    <a href="{{ route("user.favorite-movies.index") }}" class="btn btn-primary">My Favorite Movies</a>
    <a href="{{ route("user.favorite-authors.index") }}" class="btn btn-primary">My Favorite Authors</a>
    @can("is-admin")
        <a href="{{ route("admin.admin-panel") }}" class="btn btn-danger">Admin Panel</a>
    @endcan
@endsection
