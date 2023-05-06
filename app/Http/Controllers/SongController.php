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
        ],
        [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Hai superato il numero massimo di caratteri(max 100).',
            'release.required' => 'La data di pubblicazione è obbligatoria.',
        ]
    );

        $song = Song::create([
            'title' => $request->title,
            'release' => $request->release,
        ]);

        $singers = Singer::all();
        $song->singers()->attach($singers);

        //






        // dd($song);
        return redirect(route('homepage'))->with('message', 'Hai aggiunto correttamente la canzone.');
    }


}
