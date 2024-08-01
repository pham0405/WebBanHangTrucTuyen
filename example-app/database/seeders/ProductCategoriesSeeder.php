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
            ['name'=>'Chó Các Loại','slug'=>'cho','description'=>'Bao gồm tất cả các giống chó như: poodle, pug, alaska, huski,...','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Mèo Các Loại','slug'=>'meo','description'=>'Bao gồm tất cả các giống mèo như: anh lông ngắn, dài, bicolor,...','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Thức Ăn Thú Cưng','slug'=>'thuc-an','description'=>'Bao gồm tất cả các loại thức ăn cho chó mèo,...','created_at'=>Now(),'updated_at'=>Now()],
            ['name'=>'Phụ Kiện Thú Cưng','slug'=>'phu-kien','description'=>'Bao gồm tất cả các loại phụ kiện như: cát mèo, trang phục chó mèo,...','created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}