<?php

namespace App\Http\Controllers\Deletes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TrashDeleteProdController extends Controller
{
    public function delete(Request $request)
    {
        

        $id = $request->id;
        $valueBut = $request->input('button');

        if(strcmp($valueBut, 'restore')==0){

            return redirect()->route('trashRestForm', ['id' => $id]);

        } else {

            $id = $request->id;
            $query = <<<GQL
            mutation{
                trashdeleteProduct(id: "$id")
            }
            GQL;

            $products = HTTP::post('http://192.168.0.10:8000/graphql/', [
                'query' => $query
            ]);

            $products = json_decode($products, true);

            return view('trashDeleteResult');
            
        }
    }
}
