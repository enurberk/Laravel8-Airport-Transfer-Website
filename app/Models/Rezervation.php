<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervation extends Model
{
    use HasFactory;
    public function transfer()
    {
        return $this->belongsTo(Transfer::class);

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
