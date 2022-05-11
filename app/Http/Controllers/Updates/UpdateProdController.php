<?php

namespace App\Http\Controllers\Updates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Provider;


class UpdateProdController extends Controller
{
  public function update(Request $request)
  {

    $id = $request->id;
    $name = $request->name;
    $provider = $request->provider;
    $query = <<<GQL
    mutation
    {
      updateProduct
      (
        id: "$id"
        name: "$name"
        id_provider: "$provider"
        
      ) {
        name
        id_provider
      }
    }
    GQL;

    $products = HTTP::post('http://192.168.0.10:8000/graphql/', [
        'query' => $query
    ]);

     $products = json_decode($products, true);

     $message = "Product updated!";

    return redirect('/')->with('message',$message);
  }
}
