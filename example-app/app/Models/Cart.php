<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PayPal\Api\Item;

class Cart extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity','total'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}

