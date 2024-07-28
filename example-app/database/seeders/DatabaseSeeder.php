<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([

        Products::class,
        ProductCategoriesSeeder::class,
        User::class
=======
        
        UserSeeder::class,
        CategorySeeder::class,
        ProductCategoriesSeeder ::class,
        PostSeeder::class,
        ProductSeeder::class,
        CartSeeder::class,

      ]);
    }
   
    
}
