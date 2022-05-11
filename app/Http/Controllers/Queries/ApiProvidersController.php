<?php

namespace App\Http\Controllers\Queries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Provider;
use App\Models\Product;



class ApiProvidersController extends Controller
{
    public function __construct() {}

    public function crear(Request $request)
    {
            $id = $request->id;
            $valueBut = $request->input('button');

            if(strcmp($valueBut, 'delete')==0){

            return redirect()->route('deleteProvForm', ['id' => $id]);

            }else{

            $id = $request->id;
            $query = <<<GQL
            query{
                provider(id: "$id"){
                    id
                    name
                }
            }
            GQL;

            $providers = HTTP::post('http://192.168.0.10:8000/graphql/', [
                'query' => $query
            ]);
            $providers = json_decode($providers, true);
            $i = 10;

            
            return view('/Update/homeProv',[

                'products' => Product::latest()->whereNull('deleted_at')->paginate()

            ])->with('providers', $providers);
        }
    }
}
