<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $fillable = ['gender'];

    public function singers(){
        return $this->hasMany(Singer::class);
    }
}
