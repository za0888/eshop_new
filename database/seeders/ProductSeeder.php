<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        goes after Category seeder
        $categories = Category::all();
        $vendors=Vendor::all();

        if ($categories) {

            for ($i = 0; $i < 10; $i++) {
                Product::factory()
                    ->for($categories->random())
                    ->for($vendors->random())
                    ->create();
            }

        }
    }


}
