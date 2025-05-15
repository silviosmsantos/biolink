<div>
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div>
            <input type="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input type="password" name="passoword" placeholder="senha">
        </div>

        <br>
        <button type="submit">Entrar</button>
    </form>
</div>
