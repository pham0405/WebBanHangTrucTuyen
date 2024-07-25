<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Nhận Biết Bệnh Thú Cưng',
                'slug'=>'nhan-biet-benh-thu-cung',
                'description'=>'Các cách nhận biết vấn đề bệnh trên thú cưng.',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>2,
                'name'=>'Kiến Thức Thú Cưng',
                'slug'=>'kien-thuc-thu-cung',
                'description'=>'Các kiến thức, bí mật về thú cưng của bạn.',
                'created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
