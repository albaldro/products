<?php

namespace App\Http\Controllers\Inserts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Provider;


class InsertProvController extends Controller
{
    
    public function __construct() {}

    public function crear(Request $request)
    {

        $name = $request->name;

        $query = <<<GQL
        mutation
        {
          createProvider(
            name: "$name"
            
          ) {
            name
          }
        }
        GQL;

        $providers = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);

        $providers = json_decode($providers, true);
        
        return view('/Result/insertProvResult');
    }

}
