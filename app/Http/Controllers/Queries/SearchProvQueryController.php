<?php

namespace App\Http\Controllers\Queries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SearchProvQueryController extends Controller
{
    public function search(Request $request) {

        $name = $request->name;
        $query = <<<GQL
        query{
            providers(name: "$name"){
              id
              name
            }
          }
        GQL;

        $providers = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);
        $providers = json_decode($providers, true);
        
        return view('searchProv')->with('providers', $providers);
    }
}
