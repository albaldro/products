<?php

namespace App\Http\Controllers\Dealers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\Product;


class UpdateProdDealerController extends Controller
{
    public function index()
    {
        return view('updateProd',[

        'providers' => Provider::latest()->paginate(),
        'products' => Product::latest()->paginate()

        ]);
    }
}
