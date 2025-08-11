<div>

    <h1>Edite o Link :: {{ $link->id }}</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="POST">
        @csrf
        @method('PUT') <!-- Adiciona o método PUT -->

        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name', $link->name) }}">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="link" placeholder="https://www.example.com" value="{{ old('link', $link->link) }}">
            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button type="submit">Atualizar link</button>

        <br>

        <a href="{{ route('dashboard') }}">Cancelar</a>
    </form>
</div>