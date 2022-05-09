<?php

namespace App\Http\Controllers\Queries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiTrashProvidersController extends Controller
{
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

        $providers = HTTP::post('http://192.168.1.205:8000/graphql/', [
            'query' => $query
        ]);
        $providers = json_decode($providers, true);
        $i = 10;

        
        return view('/Update/trashProvView')->with('providers', $providers);
    }
}
