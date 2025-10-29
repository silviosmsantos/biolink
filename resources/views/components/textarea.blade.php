@props(['value'])

<textarea {{ $attributes }} placeholder="Primary" class="textarea w-full">
    {{ $value }}
</textarea>