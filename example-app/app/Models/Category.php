<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 
        'parent_id',
        'status'
    ];
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
