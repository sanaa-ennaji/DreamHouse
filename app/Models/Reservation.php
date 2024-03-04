<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id',
       'house_id',

    ];

    public function HouseReserved()
    {
        return $this->belongsTo(user::class, 'house_id');
    }

  
}

