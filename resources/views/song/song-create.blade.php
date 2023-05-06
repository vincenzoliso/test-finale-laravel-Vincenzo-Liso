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
                <input type="text" class="form-control mb-1 @error('title') is-invalid @enderror" name="title" placeholder="Titolo" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger my-0 py-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-md-8">
                <label class="form-label fw-semibold">Data di rilascio</label>
                <input type="date" class="form-control mb-1 @error('release') is-invalid @enderror" name="release" placeholder="Data di rilascio" value="{{ old('release') }}">
                @error('release')
                <div class="alert alert-danger my-0 py-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-12 col-md-8">
                <label for="singers" class="form-label fw-semibold">Cantanti</label>
                <select class="form-control" id="singers" name="singers[]" multiple required>
                    @foreach($singers as $singer)
                        <option value="{{ $singer->id }}">{{ $singer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary">Aggiungi canzone</button>
        </div>
    </form>
</body>
</html>
