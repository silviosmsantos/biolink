<x-layout.app>
    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif
    <x-container>
        <x-card title="Create a new Link">
            <x-form :route="route('links.store')" post id="create-form">
                <x-input name="name" type="text" placeholder="Instagram" value="{{ old('name') }}" />
                <x-input name="link" type="link" placeholder="https://www.example.com" value="{{ old('link') }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancelar</x-a>
                <x-button form="create-form" type="submit">Create a new Link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>