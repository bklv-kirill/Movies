<div class="card mb-3">
    <div class="card-header">
        Cinema №{{ $cinema->id }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $cinema->title }}</h5>
        <p class="card-text">Address: <span class="text-primary">{{ $cinema->address }}</span></p>

        {{ $slot }}

    </div>
</div>
