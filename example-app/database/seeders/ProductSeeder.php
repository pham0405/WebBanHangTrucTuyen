<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'name' => 'Laptop',
            'price' => 1000,
            'description' => 'Laptop Asus',
            'category_id' => 1,
        ]);
    }
}
