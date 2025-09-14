<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" type="email" placeholder="email@example.com" value="{{ old('email') }}" />
                <x-input name="password" type="password" placeholder="senha" />
            </x-form>
            <x-slot:actions>
                <x-button form="login-form" type="submit">Entrar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>