<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex flex-col gap-4">
            <x-button ghost :href="route('users.profile')" class="mb-4">Profile</x-button>
            <x-button ghost :href="route('links.create')" class="mb-4">Create a new Link</x-button>
            <x-button ghost :href="route('logout')" class="mb-4">Logout</x-button>
        </div>

        <div class="max-w-md mx-auto flex flex-col items-center space-y-6 text-center">

            <x-img src="/storage/{{ $user->photo }}" alt="{{ $user->name . ' Profile Picture' }}"
                class="w-32 h-32 rounded-full object-cover shadow-md" />

            <h1 class="font-bold text-2xl tracking-wide">
                {{ $user->name }}
            </h1>

            @if ($user->description)
                <p class="text-sm text-gray-600 dark:text-gray-400 max-w-xs">
                    {{ $user->description }}
                </p>
            @endif


            <ul class="w-full space-y-3">
                @foreach ($links as $link)
                    <li class="flex items-center justify-center gap-2">
                        @unless ($loop->last)
                            <x-form :route="route('links.down', $link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-down class="h-5 w-5" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button ghost disabled>
                                <x-icons.arrow-down class="h-5 w-5" />
                            </x-button>
                        @endunless

                        @unless ($loop->first)
                            <x-form :route="route('links.up', $link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-up class="h-5 w-5" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button ghost disabled>
                                <x-icons.arrow-up class="h-5 w-5" />
                            </x-button>
                        @endunless

                        <x-button :href="$link->link" block outline info>
                            {{ $link->id }} - {{ $link->name }}
                        </x-button>

                        <x-form :route="route('links.destroy', $link)" delete
                            onsubmit="return confirm('Tem certeza que deseja excluir este link?')">
                            <x-button ghost delete type="submit">
                                <x-icons.trash class="h-5 w-5" />
                            </x-button>
                        </x-form>
                    </li>
                @endforeach
            </ul>

        </div>
    </x-container>
</x-layout.app>
