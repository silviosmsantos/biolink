<x-layout.app>
    <div class="mx-auto max-w-screen-md py-20 flex items-center justify-center">
        <div class="card bg-base-200 w-96 shadow-xl">

            @if ($message = session()->get('message'))
                <div>{{ $message }}</div>
            @endif

            <div class="card-body">
                <div class="card-title">Login</div>
                <form action="{{ route('login') }}" method="POST" id="login-form">
                        @csrf
                        <div class="mb-6 mt-4">
                            <input class="input" type="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-small text-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <input class="input" type="password" name="password" placeholder="senha">
                            @error('password')
                                <div class="text-small text-error">{{ $message }}</div>
                            @enderror
                        </div>
                </form>
                <div class="card-actions justify-end">
                    <button class ="btn btn-primary" type="submit" form="login-form">Entrar</button>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>