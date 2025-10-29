<x-layout.app>
    <x-container>


        <div class="max-w-md mx-auto flex flex-col items-center space-y-6 text-center">
            
            <x-img 
                src="/storage/{{ $user->photo }}" 
                alt="{{ $user->name . ' Profile Picture' }}" 
                class="w-32 h-32 rounded-full object-cover shadow-md"
            />

            <h1 class="font-bold text-2xl tracking-wide">
                {{ $user->name }}
            </h1>

            @if($user->description)
                <p class="text-sm text-gray-600 dark:text-gray-400 max-w-xs">
                    {{ $user->description }}
                </p>
            @endif

            
            <ul class="w-full space-y-3">
                @foreach ($user->links as $link)
                    <li class="flex items-center justify-center gap-2">
                        <x-button :href="$link->link" block outline target="_blank">
                            {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>

        </div>
    </x-container>
</x-layout.app>