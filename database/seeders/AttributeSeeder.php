<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
//    Attribute AttributeOption Unit models to be seeded
    public function run(): void
    {
        $attributes = [
            'size',
            'color',
            'weight-dimensional',
            'electric',
            'package'
        ];
//               size
        $attribute = Attribute::create(['name' => 'size']);
        $attrOptionsSize = [
            'NO',
            'SM',
            'L',
            'XL',
            'XXL'
        ];
        array_walk(
            $attrOptionsSize,
            fn($item, $key) => AttributeOption::create([
                'name' => $item,
                'attribute_id' => $attribute->id,
                'comment' => fake()->sentence
            ])
        );
//        package
        $attribute = Attribute::create(['name' => 'package']);
        $attrOptionsPackage = [
            'box',
            'barrel',
            'carton',
            'pack'
        ];

        array_walk(
            $attrOptionsPackage,
            fn($item, $key) => AttributeOption::create([
                'name' => $item,
                'attribute_id' => $attribute->id,
                'comment' => fake()->sentence
            ])
        );
        $attrPckageUnit = [
            'number inside',
            'littre',
        ];

        array_walk($attrPckageUnit, fn($item, $key) => Unit::create(
            [
                'name' => $item,
                'attribute_id' => $attribute->id
            ]));


// weight-dimensional
        $attribute = Attribute::create(['name' => 'weight-dimensional']);
        $weightDimOptions = [
            'length',
            'heght',
            'volume',
            'square',
            'weight'
        ];
        array_walk(
            $weightDimOptions,
            fn($item, $key) => AttributeOption::create([
                'name' => $item,
                'attribute_id' => $attribute->id,
                'comment' => fake()->sentence
            ])
        );

        $unitsDimension = [
            'pcs',
            'cm',
            'm',
            'gram',
            'kg',
            'ton',
            'lb.',//фунт
            'ounce',//унция
            'cbm',
            'sqm',
            'ltr',
        ];
        array_walk(
            $unitsDimension,
            fn($item, $key) => Unit::create([
                'name' => $item,
                'attribute_id' => $attribute->id
            ])
        );

//        electric

        $attribute = Attribute::create([
            'name' => "electric",
        ]);

        $attributeOptElectric = [
            'voltage',
            'amperage',
            'power'
        ];
        array_walk(
            $attributeOptElectric,
            fn($item, $key) => AttributeOption::create([
                'name' => $item,
                'attribute_id' => $attribute->id,
                'comment' => fake()->sentence,
            ])
        );

        $unitsElectric = [
            'millivolt',
            'volt',
            'kilovolt',
            'milliampere',
            'amper',
            'vatt',
            'kilowatt',
            'megawatt'
        ];

        array_walk(
            $unitsElectric,
            fn($item, $key) => Unit::create([
                'name' => $item,
                'attribute_id' => $attribute->id
            ])
        );

        /*//        'volume'
                $attribute=Attribute::create([
                    'name'=>'volume'
                ]);

                $unitsVolume=[
                    'cbm',
                    'sqm',
                    'ltr',
                ];
                array_walk(
                    $unitsVolume,
                    fn($item,$key)=>Unit::create([
                        'name'=>$item,
                        'attribute_id'=>$attribute->id
                    ])
                );*/
    }
}
