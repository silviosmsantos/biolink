<x-layout.app>
    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" type="text" placeholder="Your Name Example" value="{{ old('name') }}" />
                <x-input name="email" type="email" placeholder="email@example.com" value="{{ old('email') }}" />
                <x-input name="email_confirmation" type="email" placeholder="Confirm Email" />
                <x-input name="password" type="password" placeholder="Password" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Alredy have an account?</x-a>
                <x-button form="register-form" type="submit">Register</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>