<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'sku' => $this->faker->unique()->text(10),
            'name' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'hsn_code' => $this->faker->text(10),
            'description' => $this->faker->paragraph,
            'short_description' => $this->faker->sentence,
            'special_price' => $this->faker->optional()->randomFloat(2, 5, 500),
            'url_key' => Str::slug($this->faker->unique()->sentence),
            'brand' => $this->faker->word,
            'manufacturer_code' => $this->faker->unique()->text(8),
        ];
    }
}
