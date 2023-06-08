<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function perans()
    {
        return $this->hasMany(Peran::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function kritiks()
    {
        return $this->hasMany(Kritik::class);
    }
}
