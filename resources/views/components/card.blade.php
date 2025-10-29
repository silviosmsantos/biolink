@props([
    'title' => null,
    'actions' => null,
])

<div class="card bg-base-200 w-2/3 shadow-xl">
    <div class="card-body">
        @if($title)
            <div class="card-title mb-6">{{ $title }}</div>
        @endif

        {{ $slot }}
        
        @isset($actions)
            <div class="card-actions flex items-center justify-between mt-6">
                {{ $actions }}
            </div>
        @endisset
    </div>
</div>