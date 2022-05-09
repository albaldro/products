<?php

namespace App\Http\Controllers\Deletes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TrashDeleteProvController extends Controller
{
    public function delete(Request $request)
    {
        

        $id = $request->id;
        $valueBut = $request->input('button');

        if(strcmp($valueBut, 'restore')==0){

            return redirect()->route('trashRestProvForm', ['id' => $id]);

        } else {

            $id = $request->id;
            $query = <<<GQL
            mutation{
                trashdeleteProvider(id: "$id")
            }
            GQL;

            $providers = HTTP::post('http://192.168.1.205:8000/graphql/', [
                'query' => $query
            ]);

            $providers = json_decode($providers, true);

            return view('/Result/trashDeleteProvResult');
        }
    }
}
