<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardingHouse extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'city_id',
        'category_id',
        'description',
        'price',
        'address'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rooms()
    {
        return $this->HasMany(Room::class);
    }

    public function bonuses()
    {
        return $this->HasMany(Bonus::class);
    }

    public function testimonials()
    {
        return $this->HasMany(Testimonial::class);
    }

    public function transactions()
    {
        return $this->HasMany(Transaction::class);
    }
}
