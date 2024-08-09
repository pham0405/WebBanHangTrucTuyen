<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'id'=>1,
                'user_id'=>1,
                'product_id'=>1,
                'content'=>'Thú Cưng Thú Cưng Thú Cưng Thú Cưng',
                'created_at'=>Now(),'updated_at'=>Now()
            ],
            [
                'id'=>2,
                'user_id'=>1,
                'product_id'=>2,
                'content'=>'Thú CưngThú CưngThú CưngThú CưngThú Cưng',
                'created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
