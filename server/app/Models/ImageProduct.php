<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
