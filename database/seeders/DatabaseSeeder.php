<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provider;
use App\Models\Product;
use App\Models\CostPrice;
use App\Models\SellPrice;
use Database\Factories;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $providers = Provider::factory(3)->create();

        $products = Product::factory(10)->create();

        $costprices = CostPrice::factory(5)->create();

        $sellprices = SellPrice::factory(5)->create();

        //$this->call(ProviderSeeder::class);
        //$this->call(ProductSeeder::class);
        
    }
}
