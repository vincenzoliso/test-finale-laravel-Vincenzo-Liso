<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-center">Cloudify</h1>
    <h2 class="text-center">Tutti i cantanti</h2>

    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif


    <div class="text-center mt-5">
        <a href="{{route('singer.create')}}" class="px-5">Inserisci nuovi cantanti</a>
        <a href="{{route('song.create')}}">Inserisci nuove canzoni</a>
    </div>
    <div class="d-flex justify-content-center mt-5">

        <form method="GET" action="{{ route('homepage') }}">
            @csrf
            <label for="singer">Seleziona un cantante:</label>
            <select name="singer" id="singer">
                @foreach ($singers as $singer)
                <option value="{{ $singer->id }}">{{ $singer->name }}</option>
                @endforeach
            </select>
            <button type="submit">Cerca</button>
        </form>
    </div>

    @if(isset($songs))
    <table>
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Data di pubblicazione</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $song)
            <tr>
                <td>{{ $song->title }}</td>
                <td>{{ $song->release }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>
</html>
