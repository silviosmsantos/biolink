<x-layout.app>
    <div>
        <h1>Profile</h1>

        @if($message = session()->get('message') )
            <div>{{ $message }}</div>
        @endif

        <form action="{{ route('users.profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <img src="{{ $user->photo }}" alt="{{ $user->name . ' Profile Picture' }}" width="100" height="100" />
                <input type="file" name="photo" />
            </div>
            <br>
            <div>
                <input name="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <textarea name="description" placeholder="Breve resumo">{{ old('description', $user->description) }}</textarea>
                @error('description')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <span>biolinks.com.br/</span>
                <input name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}" />
                @error('handler')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <a href="{{ route('dashboard') }}">Cancelar</a>
            <button>Update</button>
        </form>
    </div>

</x-layout.app>