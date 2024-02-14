@if($errors->has($attributes["name"]))
    <div id="emailHelp" class="form-text text-danger mb-2">{{ $errors->first($attributes["name"]) }}</div>
@endif
<div class="form-floating mb-3">
    <textarea name="{{ $attributes["name"] }}" class="form-control" placeholder="Leave a comment here"
              id="floatingTextarea2" style="height: 100px">{{ $attributes["value"] }}</textarea>
    <label for="floatingTextarea2">{{ $slot }}</label>
</div>
