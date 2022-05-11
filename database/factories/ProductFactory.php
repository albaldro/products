<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Provider;
use App\Models\Product;
use App\Models\CostPrice;
use DB;



class ProductFactory extends Factory
{
    protected $model = Product::class;
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
