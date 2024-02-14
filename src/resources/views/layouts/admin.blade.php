<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Panel: @yield("title")</title>
</head>
<body>

<div class="container">

    <h1 class="text-center m-3"><span class="text-primary">{{ \App\Http\Controllers\Admin\AdminHelper::getUserName()->name }}'s</span> Admin Panel</h1>

    <hr>

    {{-- TODO: Реализовать получения count информации о моделях через кэш --}}
    <div class="d-flex align-center justify-content-evenly flex-wrap">
        @forelse(\App\Http\Controllers\Admin\AdminHelper::getAdminData() as $data)
            <h5><a href="{{ route($data["route_path"]) }}"
                   class="btn btn-{{ \Illuminate\Support\Facades\Route::is("{$data["route_path"]}*") ? "danger" : "primary" }}">{{ $data["title_info"] }}
                    : {{ $data["count"] }}</a></h5>
        @empty
            <h3 class="text-center">No Admin Data</h3>
        @endforelse
    </div>
    <hr>
    @yield("content")
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
