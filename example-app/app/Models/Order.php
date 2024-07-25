<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'description',
        'address',
        'total',
        'status',
        'date',
        'payment_method',
    ];

    // Nếu bạn cần định nghĩa các mối quan hệ, ví dụ với User hoặc Product:
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}