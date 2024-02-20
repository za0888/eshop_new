<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Sku;
use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // take a product
        $product1 = Product::with('vendor')->get()->find(1);

        $vendor = $product1->vendor;

//         take one of four stocks
        $stock = Stock::find(rand(1, 4));

        $sku = Sku::create(
            [
                'number_in_stock'=>fake()->numberBetween(1,99999),
                'skucode'=>fake()->shuffleString('furas'),
                'barcode'=>(string)fake()->numberBetween(0000000000001,9999999999999),

            ]
        );
    }
}
