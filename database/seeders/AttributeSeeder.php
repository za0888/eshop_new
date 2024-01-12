<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes=[
            'color',
            'length',
            'width',
            'height',
            'thickness',
            'volume',
            'square',
            'electicity',
            'package'
        ];
    }
}
