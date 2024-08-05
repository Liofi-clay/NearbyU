<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'space_type',
        'price',
        'kuota',
        'desc',
        'image_product_id',
        'user_id',
    ];

    public function imageProduct()
    {
        return $this->belongsTo(ImageProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
