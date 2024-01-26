<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendors=[
            'BOSH',
            'BLACK & DECKER',
            'MAKITA',
            'METABO',
            'INTERTOOL'

        ];
       array_walk(
           $vendors,
           fn($value,$key)=>Vendor::create([
               'name'=>$value,
               'account'=>fake()->creditCardNumber,
               'email'=>fake()->email,
               'address'=>fake()->address,
               ])
       );
    }
}
