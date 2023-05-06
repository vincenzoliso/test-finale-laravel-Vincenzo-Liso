<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function createSinger() {
        return view('singer.singer-create');
    }

    public function storeSinger(Request $request){
        $request->validate([
            'name' => 'required|max:50|unique:singers',
            'birth' => 'required',
            'gender_id' => 'required'
        ],
        [
            'name.required' => 'Il nome è obbligatorio.',
            'name.max' => 'Hai superato il numero massimo di caratteri(max 50).',
            'name.unique' => 'Il nome è già stato inserito!',
            'birth.required' => 'Inserire la data di nascita.',
            'gender_id.required' => 'Campo obbligatorio.',
        ]
    );

        $singer = Singer::create([
            'name' => $request->name,
            'birth' => $request->birth,
            'gender_id'=>$request->gender_id
        ]);

        // dd($singer);
        return redirect(route('homepage'))->with('message', 'Hai aggiunto correttamente il cantante.');
    }
}
