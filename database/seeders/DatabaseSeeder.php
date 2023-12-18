<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            StockSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            VendorSeeder::class,
            UnitSeeder::class,
            AttributeSeeder::class,
            AttributeOptionSeeder::class,
//            SkuSeeder::class,
        ]);
    }
}
