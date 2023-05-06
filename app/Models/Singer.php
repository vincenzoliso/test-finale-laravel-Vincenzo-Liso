<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'birth', 'gender_id'];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function songs(){
        return $this->belongsToMany(Song::class);
    }
}
