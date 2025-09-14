@props(['name'])

<div>
    <input class="input" name="{{ $name }}" {{ $attributes }}>
    @error($name)
        <div class="text-small text-error">{{ $message }}</div>
    @enderror
</div>