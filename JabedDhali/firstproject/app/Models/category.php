<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function blog()
    {
        return $this->hasMany(blog::class);
    }
    // public function blog()
    // {
    //     return $this->belongsTo(blog::class);
    // }
}
