<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'day', 'check_in', 'check_out', 'unique_code', 'payment_method_id', 'status_id', 'pop_img_id', 'total_cost'
    ];

    public function proofOfPaymentImage()
    {
        return $this->belongsTo(ProofOfPaymentImage::class, 'pop_img_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
