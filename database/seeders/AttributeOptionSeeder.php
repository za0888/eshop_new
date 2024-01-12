<?php

namespace Database\Seeders;

use App\Models\AttributeOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributeOptions=[
            'pcs',
            'cm',
            'm',
            'ltr',
            'kg',
            'cbm',
            'sqm',
            'red',
            'black',
            'white',
        ];
        array_walk($attributeOptions,
            fn($value,$key)=>AttributeOption::create([
                'name'=>$value,
                'comment'=>fake()->sentence(9),
                ]));
    }
}
