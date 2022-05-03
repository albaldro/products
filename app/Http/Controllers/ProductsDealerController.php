<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Provider;

class ProductsDealerController extends Controller
{
    public function index()
    {
        return view(['index', 'insertProd'],[

        'products' => Product::latest()->paginate(),
        'providers' => Provider::latest()->paginate()

        ]);
    }
}
