<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    #One to Many(Inverse) / Belongs to
    public function category(){
        return $this->belongsTo(Category::class);
    }

    #One to Many
    public function rezervation(){
        return $this->hasMany(Rezervation::class);
    }
}
