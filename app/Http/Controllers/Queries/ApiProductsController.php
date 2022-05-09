<?php

namespace App\Http\Controllers\Queries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Provider;

class ApiProductsController extends Controller
{

    public function __construct() {}

    public function crear(Request $request)
    {

        $id = $request->id;
        $valueBut = $request->input('button');

        if(strcmp($valueBut, 'delete')==0){

        return redirect()->route('deleteForm', ['id' => $id]);

        }else{

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

            $products = HTTP::post('http://192.168.1.205:8000/graphql/', [
                'query' => $query
            ]);

            $products = json_decode($products, true);
            $i = 10;
            
            return view('/Update/home', [
                'providers' => Provider::latest()->paginate()
            ])->with('products', $products);
        
        }
    }
}