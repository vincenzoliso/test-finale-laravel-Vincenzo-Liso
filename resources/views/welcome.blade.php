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
    <h1 class="text-center">Spotify</h1>
    <div class="text-center mt-5">
        <a href="{{route('singer.create')}}" class="px-5">Inserisci nuovi cantanti</a>
        <a href="{{route('song.create')}}">Inserisci nuove canzoni</a>
    </div>
</body>
</html>
