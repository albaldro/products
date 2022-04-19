<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductsDealerController extends Controller
{
    public function index()
    {
        return view('index',[

        'products' => Product::latest()->paginate()

        ]);
    }
}
