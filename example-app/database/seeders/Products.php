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
                'id' => 1,
                'name'=>'ALASKA NÂU ĐỎ XINH ',
                'slug'=>'alaska-nau-do',
                'quantity'=>'1',
                'price'=>'420000',
                'category_id'=>'1',
                'description'=>'Chó Alaska nhập khẩu',
                'view'=>'1',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-10_18-14-08.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id' => 2,
                'name'=>'POODLE VÀNG MƠ',
                'slug'=>'poodle vàng',
                'quantity'=>'1',
                'price'=>'730000',
                'category_id'=>'2',
                'description'=>'Nhập khẩu từ Úc',
                'view'=>'616',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-10_20-33-30-2.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id' => 3,
                'name'=>'POODLE KEM MƠ',
                'slug'=>'poodle màu kem mơ',
                'quantity'=>'1',
                'price'=>'920000',
                'category_id'=>'3',
                'description'=>'Nhập khẩu từ Úc',
                'view'=>'726',
                'image'=>'https://matpetfamily.com/wp-content/uploads/2024/07/photo_2024-07-13_14-50-06.jpg',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            
        ]);
    }
}

