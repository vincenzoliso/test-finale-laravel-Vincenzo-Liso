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
            'name' => 'required|min:3|max:50',
            'birth' => 'required',
            'gender_id' => 'required'
        ]);

        $singer = Singer::create([
            'name' => $request->name,
            'birth' => $request->birth,
            'gender_id'=>$request->gender_id
        ]);

        // dd($singer);
        return redirect(route('homepage'));
    }

//->with('message','Il tuo articolo è stato creato ed è in fase di revisione');

}
