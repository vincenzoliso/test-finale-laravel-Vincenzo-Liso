<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-home">
    @if(session('message'))
    <div class="alert alert-success fixed-top text-center">
        {{session('message')}}
    </div>
    @endif
    <h1 class="text-center fw-bold text-white">Cloudify</h1>
    <div class="container-fluid">
        <div class="text-center pulsanti mt-5">
            <a href="{{route('singer.create')}}" class="px-5 fs-3">Inserisci nuovi cantanti</a>
            <a href="{{route('song.create')}}" class="fs-3">Inserisci nuove canzoni</a>
            <div class="pt-5">
                <a href="{{route('songs.by.singer')}}" class="fs-3  text-center">Vedi lista cantanti</a>
            </div>
        </div>
    </div>
</body>
</html>
