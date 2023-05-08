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

    <h2 class="text-center mt-5">Inserisci nuovi cantanti</h2>


    <form action="{{route('singer.store')}}" method="POST">
        @csrf
        <div class="row justify-content-center px-0 mx-0">
            <div class="col-12 col-md-7 mt-5">
                <label class="form-label fw-semibold">Nome cantante</label>
                <input type="text" class="form-control mb-1 @error('name') is-invalid @enderror" name="name" placeholder="Inserire Nome cantante" value="{{ old('name') }}">
                @error('name')
                <div class="alert alert-danger my-0 py-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-md-7">
                <label class="form-label fw-semibold">Genere</label>
                <select name="gender_id" class="form-control">
                    @foreach ($genders as $gender)
                    <option value="{{$gender->id}}">{{$gender->gender}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-7">
                <label class="form-label fw-semibold">Data di nascita</label>
                <input type="date" class="form-control mb-1 @error('birth') is-invalid @enderror" name="birth" placeholder="Inserire data di nascita" value="{{ old('birth') }}">
                @error('birth')
                <div class="alert alert-danger my-0 py-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary">Aggiungi cantante</button>
        </div>
    </form>
    <div class="text-center mt-5">
        <a href="{{route('song.create')}}" class="btn btn-primary">Inserisci nuove canzoni</a>
        <a href="{{route('homepage')}}" class="btn btn-primary">Torna alla homepage</a>
    </div>
</body>
</html>
