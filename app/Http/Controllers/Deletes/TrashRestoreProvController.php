<?php

namespace App\Http\Controllers\Deletes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TrashRestoreProvController extends Controller
{
    public function restore(Request $request)
    {

        $id = $request->id;
        $query = <<<GQL
        mutation{
            restoreProvider(id: "$id")
          }
        GQL;

        $providers = HTTP::post('http://192.168.0.10:8000/graphql/', [
            'query' => $query
        ]);

        $providers = json_decode($providers, true);

        return view('/Result/trashRestoreProvResult');
    }
}
