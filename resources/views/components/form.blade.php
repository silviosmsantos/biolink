@props([
    'route',
    'post' => null,
])

<form action="{{ $route }}" method="{{ $post ? 'POST' : 'GET' }}" {{ $attributes->class(['flex flex-col gap-4']) }}>
    @if($post)
        @csrf
    @endif

    {{ $slot }}
</form>
