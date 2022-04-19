<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Provider;
use DB;



class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'reference_number' => $this->faker->bothify('??####'),
            'cuantity' => $this->faker->randomNumber(3),
            'cost_price' => $this->faker->randomFloat(2, 0, 100),
            'id_provider' => $this->faker->randomElement(DB::table('providers')->pluck('_id')),
        ];
    }
}
