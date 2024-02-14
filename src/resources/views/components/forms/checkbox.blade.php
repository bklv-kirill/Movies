<div class="form-check">
    <input name="{{ $attributes["name"] }}" value="{{ $attributes["value"] }}" class="form-check-input" type="checkbox" id="{{ $slot }}" @checked($attributes["checked"])>
    <label class="form-check-label" for="{{ $slot }}">
        {{ $slot }}
    </label>
</div>
