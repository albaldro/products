<?php

namespace App\Http\Controllers\Deletes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Provider;


class DeleteProdController extends Controller
{
    public function delete(Request $request)
    {

        $id = $request->id;
        $query = <<<GQL
        mutation{
            deleteProduct(id: "$id")
          }
        GQL;

        $products = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);

        $products = json_decode($products, true);

        $message = "Product deleted temporally!";

        return redirect('/')->with('message',$message);

          
    }
}
