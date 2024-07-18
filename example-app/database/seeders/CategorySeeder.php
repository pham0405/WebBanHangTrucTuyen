<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Điều hướng đúng đến model Category

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sử dụng model Category để tạo bản ghi mới
        Category::create([
            'name' => 'Category'
        ]);
    }
}

