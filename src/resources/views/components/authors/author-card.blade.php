<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $author->avatar }}" class="img-fluid rounded-start" alt="author_avatar">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <a href="{{ route($attributes["route"] ?? "authors.show", $author->id) }}"><h5 class="card-title">{{ $author->first_name }} {{ $author->last_name }}</h5></a>
                <p class="card-text">Gender: {{ $author->gender }}</p>
                <p class="card-text">Movies: <span class="text-primary">{{ $author->movies->count() }}</span> Age: <span class="text-primary">{{ $author->getAge() }}</span></p>
                <p class="card-text"><small class="text-body-secondary">Birthday: {{ $author->birthday->format("d.m.Y") }}</small></p>
            </div>
        </div>
    </div>
</div>
