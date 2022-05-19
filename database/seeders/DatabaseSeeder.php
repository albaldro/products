<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provider;
use App\Models\Product;
use App\Models\CostPrice;
use App\Models\SellPrice;
use App\Models\User;
use Database\Factories;
use DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $providers = Provider::factory(18)->create();

        $products = Product::factory(30)->create();

        $costprices = CostPrice::factory(5)->create();

        $sellprices = SellPrice::factory(5)->create();

        $users = User::factory(5)->create();


        DB::table('features')->insert([
            'title' =>'trash',
            'feature' =>'trash',
            'description' =>'trash',
            'active_at' => null,
        ]);

        //$this->call(ProviderSeeder::class);
        //$this->call(ProductSeeder::class);
        
    }
}
