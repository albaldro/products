<?php

namespace App\Http\Controllers\Inserts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Provider;


class InsertProdController extends Controller
{

    public function __construct() {}

    public function crear(Request $request)
    {

        $name = $request->name;
        $number = substr(md5(time()), 0, 6);
        $provider = $request->provider;
        $query = <<<GQL
        mutation
        {
          createProduct(
            name: "$name"
            reference_number: "$number"
            id_provider: "$provider"
            
          ) {
            name
            reference_number
            id_provider
          }
        }
        GQL;

        $products = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);

        $products = json_decode($products, true);

        return view('/Result/insertResult');
    }
}