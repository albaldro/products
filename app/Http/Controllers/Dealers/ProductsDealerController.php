<?php

namespace App\Http\Controllers\Dealers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Provider;

class ProductsDealerController extends Controller
{
    public function index()
    {
        return view('index',[

        'products' => Product::whereNull('deleted_at')->paginate(),
        'providers' => Provider::latest()->paginate()

        ]);
    }
}
