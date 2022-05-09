<?php

namespace App\Http\Controllers\Deletes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Provider;

class TrashRestoreProdController extends Controller
{
    public function restore(Request $request)
    {

        $id = $request->id;
        $query = <<<GQL
        mutation{
            restoreProduct(id: "$id")
          }
        GQL;

        $products = HTTP::post('http://192.168.1.205:8000/graphql/', [
            'query' => $query
        ]);

        $products = json_decode($products, true);

        $message = "Product restored!";

        return redirect('/trash')->with('message',$message);
    }
}
