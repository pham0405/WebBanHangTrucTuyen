<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'ALASKA NÂU ĐỎ XINH ',
                'slug'=>'alaska-nau-do',
                'quantity'=>'1',
                'price'=>'420000',
                'category_id'=>'6',
                'description'=>'Chó Alaska nhập khẩu',
                'view'=>'1',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-10_18-14-08.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ]
           
        ]);
    }
}

