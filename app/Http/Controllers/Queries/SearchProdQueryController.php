<?php

namespace App\Http\Controllers\Queries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use View;



class SearchProdQueryController extends Controller
{
    public function search(Request $request) {

        $name = $request->name;
        $query = <<<GQL
        query{
            products(name: "$name"){
              id
              name
              reference_number
              id_provider
              provider{
                id
                name
              }
            }
          }
        GQL;

        $products = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);
        $products = json_decode($products, true);
        
        return view('searchProd')->with('products', $products);
    }
}
