<?php

namespace App\Http\Controllers\Updates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Provider;

class UpdateProvController extends Controller
{
    public function update(Request $request)
    {

      $id = $request->id;
      $valueBut = $request->input('button');

      if(strcmp($valueBut, 'delete')==0){

        return redirect()->route('deleteProvForm', ['id' => $id]);

     } else {

        $id = $request->id;
        $name = $request->name;
        $query = <<<GQL
        mutation
        {
          updateProvider
          (
            id: "$id"
            name: "$name"            
          ) {
            name
          }
        }
        GQL;

        $providers = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);

        $providers = json_decode($providers, true);
        $info = "The provider has been updated";

        return view('/Result/updateProvResult');

    }
  }
}
