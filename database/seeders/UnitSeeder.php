<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitsDimension=[
            'pcs',
            'cm',
            'm',
            'gram',
            'kg',
            'ton',
            'lb.',//фунт
            'ounce',//унция
        ];

        $unitsVolume=[
            'cbm',
            'sqm',
            'ltr',
        ];
        $unitsElectric=[
            'volt',
            'amper',
            'vatt'
        ];

      $attrDimension=Attribute::where('name','weight-dimensional')->first();
      if ($attrDimension){

      }
    }
}
