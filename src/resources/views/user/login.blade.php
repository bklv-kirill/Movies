@extends("layouts.user")

@section("content")
    @section("title", "Login")

    <x-forms.form :action="route('user.auth')" method="POST" button="Login" class="m-3">
        <x-forms.input name="email" type="email" :value="old('email')">
            Email
        </x-forms.input>
        <x-forms.input name="password" type="password">
            Password
        </x-forms.input>

        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{ route("user.register") }}" class="ms-2">Register</a>
    </x-forms.form>
@endsection
