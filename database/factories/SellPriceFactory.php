<?php

namespace Database\Factories;
use DB;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellPriceFactory extends Factory
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
            'price' => $this->faker->randomFloat(2, 0, 100),
            'id_product' => $this->faker->randomElement(DB::table('products')->pluck('_id')),
        ];
    }
}
