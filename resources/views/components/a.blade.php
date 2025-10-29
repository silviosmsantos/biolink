@props([
    'href',
])

<a class="link link-hover" href="{{ $href }}">
    {{ $slot }}
</a>