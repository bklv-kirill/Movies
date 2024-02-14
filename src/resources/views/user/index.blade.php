@extends("layouts.admin")

@section("content")
    @section("title", "Users")

    @forelse($users as $user)
        <x-admin.item-card>
            <x-slot name="header">
                User №{{ $user->id }}
            </x-slot>

            <h5 class="card-title">Name: <span class="text-primary">{{ $user->name }}</span></h5>
            <p class="card-text">Email: <span class="text-primary">{{ $user->email }}</span></p>
            @can("delete", $user)
                <x-forms.form :action="route('admin.user.delete', $user)" method="DELETE">
                    <button type="submit" class="btn btn-danger">Delete User Account</button>
                </x-forms.form>
            @endcan
        </x-admin.item-card>
    @empty
        <h3 class="text-center">No Users</h3>
    @endforelse

@endsection

