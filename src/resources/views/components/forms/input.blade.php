@if($errors->has($attributes["name"]))
    <div class="form-text text-danger mb-2">{{ $errors->first($attributes["name"]) }}</div>
@endif
<div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">{{ $slot }}</span>
    <input name="{{ $attributes["name"] }}" type="{{ $attributes["type"] }}" value="{{ $attributes["value"] }}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

