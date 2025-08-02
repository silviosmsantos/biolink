<div>
    <h1>Registre-se</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div>
            <input type="name" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input type="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input type="email_confirmation" name="email_confirmation" placeholder="email confirmation">
        </div>

        <br>

        <div>
            <input type="password" name="password" placeholder="password">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <button type="submit">Registrar</button>
    </form>
</div>
