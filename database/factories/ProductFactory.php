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
            'id_provider' => $this->faker->randomElement(Provider::all()->pluck('_id')->toArray()),
        ];
    }
}
