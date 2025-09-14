@props([
    'title',
])

<div class="card bg-base-200 w-96 shadow-xl">
    <div class="card-body">
        <div class="card-title">{{ $title }}</div>
        {{ $slot }}
        @isset($actions)
            <div class="card-actions">
                {{ $actions }}
            </div>
        @endisset
    </div>
</div>