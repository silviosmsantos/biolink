<x-layout.app>
    <x-container>
        <x-card title="Editing link :: {{ $link->id }}">
            <x-form :route="route('links.edit', $link)" put id="edit-form">
                <x-input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
                <x-input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancelar</x-a>
                <x-button form="edit-form" type="submit">Update</x-button>
            </x-slot:actions>
        </x-card>   
    </x-container>
</x-layout.app>