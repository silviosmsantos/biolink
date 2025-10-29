<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('users.profile')" post id="update-profile-form" enctype="multipart/form-data">
                <div class="flex flex-col items-center justify-center space-y-4 mb-6">
                    <x-img src="/storage/{{ $user->photo }}" alt="{{ $user->name . ' Profile Picture' }}" />
                    <input type="file" name="photo" class="file-input file-input-primary" />
                </div>
                <x-input name="name"  placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-textarea name="description" value="{{ old('description', $user->description) }}" />
                <x-input name="handler"  placeholder="Handler" value="{{ old('handler', $user->handler) }}" />
                <x-input name="password" type="password" placeholder="Password" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Cancel</x-a>
                <x-button form="update-profile-form" type="submit">Save</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
