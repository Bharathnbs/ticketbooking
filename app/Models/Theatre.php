<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    Protected $guarded = [];
    use HasFactory;

    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
