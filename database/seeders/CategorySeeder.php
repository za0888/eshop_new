<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'drill',
            'hammer drill',
            'hammer',
            'electric jigsaw',
            'chainsaw',
            'screwdriver'
        ];

        array_walk($categories,
            fn($value, $key) => Category::create(['name' => $value]));

    }
}
