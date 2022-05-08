<?php

namespace App\Http\Controllers\Dealers;
use App\Models\Product;
use App\Models\Provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrashDealerController extends Controller
{
    public function index()
    {
        return view('trash',[

        'products' => Product::whereNotNull('deleted_at')->paginate(),
        'providers' => Provider::whereNotNull('deleted_at')->paginate()

        ]);
    }

    public function indexProv()
    {
        return view('trashProv',[

        'products' => Product::whereNotNull('deleted_at')->paginate(),
        'providers' => Provider::whereNotNull('deleted_at')->paginate()

        ]);
    }
}
