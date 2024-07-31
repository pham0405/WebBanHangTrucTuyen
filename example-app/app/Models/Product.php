<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'price',
        'quantity',
        'image',
        'description',
        'view',
        'category_id',
        'created_at',
        'updated_at',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

