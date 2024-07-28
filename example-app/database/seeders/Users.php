<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id'=>3,
                'name'=>'Lâm Minh Nhật',
                'email'=>'lamnhat509@gmail.com',
                'email_verified_at'=>Now(),
                'password'=>'1234',
            ],
        ]);
        
    }
}
