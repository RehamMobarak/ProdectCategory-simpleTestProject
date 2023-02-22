<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    // protected $model = Product::class;

    public function definition()
    {
        return [
            'Name' => $this->faker->name(),
            'Code' => $this->faker->unique()->randomNumber($nbDigits = 7, $strict = false),
            'Color' => $this->faker->colorName(),
            'category_id' => $this->faker->numberBetween(1, 20),
            'Description' => $this->faker->text(),
            'Image' => 'productDummy.png'

        ];
    }
}
