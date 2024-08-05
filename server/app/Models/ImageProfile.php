<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
