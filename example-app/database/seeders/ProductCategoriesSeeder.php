<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_categories')->insert([
            ['name'=>'Chó Poodle','slug'=>'poodle','description'=>'Chó đẹp','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Chó Pug','slug'=>'pug','description'=>'Chó đẹp','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Mèo Anh Lông Ngắn','long-ngan'=>'tui-xach','description'=>'Mèo đẹp','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}