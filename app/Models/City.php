<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'image',
        'name',
        'slug'
    ];

    public function boardingHouses()
    {
        return $this->hasMany(BoardingHouse::class);
    }
}
