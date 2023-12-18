<?php

namespace Database\Seeders;

use App\Models\Category;
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
//        goes after Category seeder
        $categories = Category::all();

        if ($categories) {

            for ($i = 0; $i < 10; $i++) {
                Product::factory()
                    ->for($categories->random())
                    ->create();
            }

        }
    }
}
