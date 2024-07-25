<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = product_categories;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'created_at',
        'update_at'

    ];
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
