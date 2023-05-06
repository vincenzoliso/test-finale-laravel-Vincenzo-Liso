<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(Request $request){
            $singer = Singer::findOrFail($request->input('singer'));
            $songs = $singer->songs;
            return view('welcome', compact('singer', 'songs'));
        }
}
