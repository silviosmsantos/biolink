<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" type="email" placeholder="email@example.com" value="{{ old('email') }}" />
                <x-input name="password" type="password" placeholder="password" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('register')">Don't you have an account?</x-a>    
                <x-button form="login-form" type="submit">Login</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>