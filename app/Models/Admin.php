<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = [];
    
    use HasFactory;
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
