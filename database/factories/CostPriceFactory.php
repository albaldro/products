<?php

namespace Database\Factories;
use App\Models\Product;
use DB;

use Illuminate\Database\Eloquent\Factories\Factory;

class CostPriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->randomNumber(3),
            'cost' => $this->faker->randomFloat(2, 0, 100),
            'id_product' => $this->faker->randomElement(Product::all()->pluck('_id')->toArray()),
        ];
    }
}
