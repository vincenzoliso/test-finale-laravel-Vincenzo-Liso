<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" bg-home">
    <h1 class="text-center fw-bold text-white">Cloudify</h1>
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif

<div class="container-fluid">
    <div class="text-center pulsanti mt-5">

        <a href="{{route('singer.create')}}" class="px-5 fs-3">Inserisci nuovi cantanti</a>
        <a href="{{route('song.create')}}" class="fs-3">Inserisci nuove canzoni</a>

    </div>
</div>

    {{-- <div class="d-flex justify-content-center mt-5">
        <label for="singer">Seleziona un cantante:</label>
        <select name="singer" id="singer">
            @foreach ($singers as $singer)
            <option value="{{ $singer->id }}">{{ $singer->name }}</option>
            @endforeach
        </select>
        <button type="submit">Cerca</button>
    </div> --}}
    {{-- <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data di pubblicazione</th>
              </tr>
            </thead>
            <tbody>
                @foreach($singers as $singer)
                <tr>
                    <td>{{ $singer->id }}</td>
                    <td>{{ $singer->name }}</td>
                    <td>{{ $singer->birth }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </div> --}}


</body>
</html>
