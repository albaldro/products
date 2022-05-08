<?php

namespace App\Http\Controllers\Queries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Provider;



class ApiProvidersController extends Controller
{
    public function __construct() {}

    public function crear(Request $request)
    {

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

        
        return view('/Update/homeProv')->with('providers', $providers);
    }
}
