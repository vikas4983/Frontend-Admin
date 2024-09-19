
<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="file" name="{{ $name }}" id="{{ $name }}" class="form-control">
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
