@props([
    'title',
])

<div class="card bg-base-200 w-2/3 shadow-xl">
    <div class="card-body">
        <div class="card-title mb-6">{{ $title }}</div>
        {{ $slot }}
        @isset($actions)
            <div class="card-actions flex items-center justify-between mt-6">
                {{ $actions }}
            </div>
        @endisset
    </div>
</div>