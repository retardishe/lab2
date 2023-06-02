<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition() : array
    {
        return [
            //'categories_id' => $this->faker->randomNumber(1),
            'name' => $this->faker->word(),
            'code' => $this->faker->ean8(),
            'description' => $this->faker->paragraph(2),
            'price' => (int)rand(1000, 300000),
            'quantity' => $this->faker->randomNumber(0),
            'img' => $this->faker->imageUrl($width = 480, $height = 480)
        ];
    }
}