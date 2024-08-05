<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofOfPaymentImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'pop_img_id');
    }
}
