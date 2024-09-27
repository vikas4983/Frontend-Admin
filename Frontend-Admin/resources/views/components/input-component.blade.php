<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $name === 'password' ? 'password' : ($name === 'email' ? 'email' : ($name === 'password_confirmation' ? 'password' : ($name === 'mobile' ? 'mobile' : 'text'))) }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}" class="form-control @error($name) is-invalid @enderror">
    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
