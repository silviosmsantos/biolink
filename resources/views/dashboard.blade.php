<div>
    <h1>Dashboard</h1>

    @if($message = session()->get('message') )
        <div>{{ $message }}</div>
    @endif

    <br>
        <h4>User {{ auth()->user()->name}} :: {{ auth()->user()->id }}</h4>
    <br>

    <a href="{{ route('links.create') }}">Criar um novo link</a>
    <ul>
        @foreach ($links as $link)
            <li style = "display:flex;">
                
                @unless ($loop->first)
                    <form action="{{ route('links.up', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button>⬆️</button>
                    </form>
                @endunless
                
                @unless ($loop->last)
                    <form action="{{ route('links.down', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button>⬇️</button>
                    </form>
                @endunless
                
                <a href={{ route('links.edit', $link) }}> {{ $link->id }} - {{ $link->name }} </a>
                <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esse link?')">
                    @csrf
                    @method('DELETE')

                    <button>Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
