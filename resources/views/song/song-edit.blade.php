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

    <h2 class="text-center mb-5">Form modifica dati canzone</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Modifica Canzone') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('song.update', ['song' => $song->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">{{ __('Titolo') }}</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $song->title) }}" required autofocus>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="release">{{ __('Data di rilascio') }}</label>
                            <input id="release" type="date" class="form-control @error('release') is-invalid @enderror" name="release" value="{{ old('release', date('d/m/Y', strtotime($song->release)))}}" required>
                            @error('release')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="singers">{{ __('Cantanti') }}</label>
                            <select class="form-control" id="singers" name="singers[]" multiple required>
                                @foreach($singers as $singer)
                                <option value="{{ $singer->id }}" {{ $song->singers->contains($singer->id) ? 'selected' : '' }}>{{ $singer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Salva modifiche</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>
</html>
