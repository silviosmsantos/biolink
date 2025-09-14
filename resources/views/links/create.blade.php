<x-layout.app>
    <div>
        <h1>Cire um novo Link</h1>

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif

        <form action="{{ route('links.create') }}" method="POST">
            @csrf

            <div>
                <input type="name" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <div>
                <input name="link" placeholder="https://www.example.com" value="{{ old('link') }}">
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <button type="submit">Salvar link</button>
        </form>
    </div>
</x-layout.app>