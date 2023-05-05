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
    <h1 class="text-center">Inserisci nuove canzoni</h1>
    <div class="text-center mt-5">
        <a href="{{route('singer.create')}}" class="px-5">Inserisci nuovi cantanti</a>
        <a href="{{route('homepage')}}">Torna alla homepage</a>
    </div>

    <form action="{{route('song.store')}}" method="POST">
        @csrf
            <div class="row justify-content-center">
              <div class="col-12 col-md-8 mt-5">
                <label class="form-label fw-semibold">Titolo canzone</label>
                <input type="text" class="form-control mb-2" name="title" placeholder="Nome cantante">
              </div>
              <div class="col-12 col-md-8">
                <label class="form-label fw-semibold">Data di rilascio</label>
                <input type="date" class="form-control mb-2" name="release" placeholder="Data di rilascio">
              </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Aggiungi canzone</button>
            </div>

    </form>

</body>
</html>
