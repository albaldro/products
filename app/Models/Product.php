<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    use HasFactory;

    public $fillable = [
        'id',
        'reference_number',
        'cuantity',
        'cost_price',
        'name',
        'id_provider',
    ];
}
