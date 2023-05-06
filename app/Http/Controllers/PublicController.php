<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        $singers = Singer::orderBy('created_at' , 'desc')->get();
        return view('welcome', compact('singers'));

        }
}
