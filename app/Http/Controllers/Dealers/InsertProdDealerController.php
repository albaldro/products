<?php

namespace App\Http\Controllers\Dealers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;

class InsertProdDealerController extends Controller
{
    public function index()
    {
        return view('insertProd',[

        'providers' => Provider::latest()->paginate()

        ]);
    }
}
