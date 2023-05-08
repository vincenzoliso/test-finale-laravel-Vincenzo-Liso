<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs By Singer</title>
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


    <h2 class="text-center fw-bolder mb-5">Canzoni per cantante</h2>

    <div class="text-center">



        @if ($singers->isEmpty())
        <p>Non ci sono cantanti nel database. <a href="{{ route('singer.create') }}" class="btn btn-primary ms-3"> Aggiungi un cantante</a></p>
        @else
        <form method="POST" action="{{ route('songs.by.singer.search') }}">
            @csrf
            <label for="singer_id" class="fs-2 fw-bold">Scegli un cantante:</label>
            <select name="singer_id" id="singer_id" class="px-3">
                @foreach ($singers as $singer)
                <option class="fw-bold" value="{{ $singer->id }}">{{ $singer->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Cerca</button>
        </form>

        @if ($singer && isset($songs))
        <h2 class="my-5">Canzoni del cantante selezionato</h2>
        <ul>
            @foreach ($songs as $song)
            <li class="fs-5 my-2">
                {{ $song->title }} - rilasciato il {{ date('d/m/Y', strtotime($song->release)) }}
                <form action="{{ route('song.delete', $song->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ms-5" onclick="return confirm('Sei sicuro di voler eliminare questa canzone?')">Elimina</button>
                    <a href="{{ route('song.edit', $song->id) }}" class="btn btn-secondary">Modifica</a>
                </form>
                <div class="d-flex justify-content-between align-items-center mb-3">



                </div>
            </li>
            @endforeach
        </ul>
        @endif
        @endif
        <a href="{{route('homepage')}}" class="text-light btn btn-primary mt-5">Torna alla homepage</a>
    </div>
</body>
</html>
