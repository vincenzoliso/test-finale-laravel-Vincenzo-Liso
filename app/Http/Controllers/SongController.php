<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function createSong() {
        return view('song.song-create');
    }

    public function storeSong(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:100',
            'release' => 'required'
        ]);

        $song = Song::create([
            'title' => $request->title,
            'release' => $request->release
        ]);

        // dd($song);
        return redirect(route('homepage'));
    }
}
