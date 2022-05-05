<?php

namespace App\Http\Controllers\Queries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiTrashProductsController extends Controller
{
    public function crear(Request $request)
    {
        $id = $request->id;
        $query = <<<GQL
        query{
            product(id: "$id"){
                id
                name
                reference_number
                id_provider
                provider {
                    name
                }
            }
        }
        GQL;

        $products = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);
        $products = json_decode($products, true);
        $i = 10;

        
        return view('trashView')->with('products', $products);
    }
}
