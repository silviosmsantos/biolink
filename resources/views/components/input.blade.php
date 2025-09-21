@props(['name'])

<div>
    <input class="input w-full" name="{{ $name }}" {{ $attributes }}>
    @error($name)
        <div class="text-small text-error">{{ $message }}</div>
    @enderror
</div>