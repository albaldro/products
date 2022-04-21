<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class CostPrice extends Eloquent
{
    use HasFactory;

    public $fillable = [
        'id',
        'id_product',
        'quantity',
        'cost',
    ];
}
