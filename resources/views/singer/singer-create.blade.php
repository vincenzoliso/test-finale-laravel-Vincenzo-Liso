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
    <h1 class="text-center">Inserisci nuovi cantanti</h1>
    <div class="text-center mt-5">
        <a href="{{route('song.create')}}" class="px-5">Inserisci nuove canzoni</a>
        <a href="{{route('homepage')}}">Torna alla homepage</a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('singer.store')}}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 mt-5">
                <label class="form-label fw-semibold">Nome cantante</label>
                <input type="text" class="form-control mb-2" name="name" placeholder="Inserire Nome cantante">
            </div>
            <div class="col-12 col-md-8">
                <label class="form-label fw-semibold">Genere</label>
                <select name="gender" class="form-control">
                    @foreach ($genders as $gender)
                    <option value="{{$gender->id}}">{{$gender->gender}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-8">
                <label class="form-label fw-semibold">Data di nascita</label>
                <input type="date" class="form-control mb-2" name="birth" placeholder="Inserire data di nascita">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary">Aggiungi cantante</button>
        </div>
    </form>
</body>
</html>
