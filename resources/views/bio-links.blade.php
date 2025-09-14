<x-layout.app>
    <div>
        <h1>Bio Links</h1>

        @if($message = session()->get('message') )
            <div>{{ $message }}</div>
        @endif
        <img src="{{ $user->photo }}" />
        <br>
            <h4>User {{ $user->name }} :: {{ $user->handler }}</h4>
        <br>
            <h4>Description :: {{ $user->description }}</h4>
        <br>
            <a href="{{ route('users.profile') }}">Atualizar perfil</a>
        <br>

        <a href="{{ route('links.create') }}">Criar um novo link</a>
        <ul>
            @foreach ($user->links as $link)
                <li style = "display:flex;">
                    
                    <a href={{ $link->link }} target="_blank"> {{ $link->id }} - {{ $link->name }} </a>

                </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>