<?php

namespace App\Models;

use App\Models\Singer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'release'];

    public function singers(){
        return $this->belongsToMany(Singer::class);
    }
}
