<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function createSong() {
        $singers = Singer::all();
        return view('song.song-create', compact('singers'));
    }

    public function storeSong(Request $request){
        $request->validate([
            'title' => 'required|max:100',
            'release' => 'required',
            'singers' => 'required|array|min:1',
        ],[
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Hai superato il numero massimo di caratteri (max 100).',
            'release.required' => 'La data di pubblicazione è obbligatoria.',
            'singers.required' => 'Seleziona almeno un cantante.',
            'singers.array' => 'La selezione dei cantanti deve essere un array.',
            'singers.min' => 'Seleziona almeno un cantante.',
        ]);

        $song = Song::create([
            'title' => $request->title,
            'release' => $request->release,
        ]);

        $singers = $request->input('singers'); // array di id dei cantanti selezionati
        $song->singers()->attach($singers);
        return redirect(route('homepage'))->with('message', 'Hai aggiunto correttamente la canzone.');
    }


    public function index()
    {
        $singers = Singer::all();
        return view('songs-by-singer', compact('singers'));
    }

    public function songsBySinger(Request $request)
    {
        $singers = Singer::all();
        $singer = Singer::findOrFail($request->singer_id);
        $songs = $singer->songs()->orderBy('release', 'asc')->get();



        return view('songs-by-singer', compact('singer', 'songs', 'singers'));

    }

    public function deleteSong($id)
{
    $song = Song::findOrFail($id);
    $song->delete();

    return redirect(route('homepage'))->with('message', 'Hai eliminato correttamente la canzone.');
}

public function songEdit($song){

    $song = Song::findOrFail($song);
    $singers = Singer::all();
    return view('song.song-edit', compact('song', 'singers'));
}

public function update(Request $request, Song $song)
{
    $song->update($request->all());
    $song->singers()->sync($request->singers);

    return redirect()->route('songs.by.singer');
}
}
