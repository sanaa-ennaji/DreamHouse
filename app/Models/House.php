<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'status',
        'city',
        'address',
        'bedrooms',
        'bathrooms',
        'price',
        'size',
        'description',
        'images',
        'user_id',
        'status',

    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
