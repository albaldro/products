<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Faker\Generator as Faker;


class InsertProdController extends Controller
{

    public function __construct() {}

    public function crear(Request $request)
    {

        $name = $request->name;
        $number = $this->faker->bothify('??####');
        $provider = $request->provider;
        $query = <<<GQL
        mutation{
            createProduct(id: "$id"){
                name: "$name"
                reference_number: $number
                id_provider: "$provider"
            }
        }
        GQL;

        $products = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);

        return view('index');

        
        
    }
}