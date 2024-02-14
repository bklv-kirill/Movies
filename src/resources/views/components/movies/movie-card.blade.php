<div class="card mb-3">
    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text">{{ $movie->description }}</p>
        <p class="card-text"><small
                    class="text-body-secondary">Release
                Date: {{ $movie->release_date->format("d.m.Y") }}</small>
        </p>

        {{ $slot }}

    </div>
</div>
