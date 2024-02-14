@extends("layouts.user")

@section("content")
    @section("title", "Login")

    <x-forms.form :action="route('user.store')" method="POST" button="Login" class="m-3">
        <x-forms.input name="name" type="text" :value="old('name')">
            Name
        </x-forms.input>
        <x-forms.input name="email" type="email" :value="old('email')">
            Email
        </x-forms.input>
        <x-forms.input name="password" type="password">
            Password
        </x-forms.input>

        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ route("user.login") }}" class="ms-2">Login</a>
    </x-forms.form>
@endsection
