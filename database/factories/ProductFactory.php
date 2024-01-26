<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
// full name, presented in the output will consist of vendor name + product name
    {
        return [
            'name'=>strtoupper(fake()->randomLetter).'-'.fake()->randomNumber(rand(2,4)),
            'description'=>fake()->sentence(7),
            'slug'=>"some_slug"
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Product $product) {
            $product->slug=Str::slug($product->name);
        });
    }
}
