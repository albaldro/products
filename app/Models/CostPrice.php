<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class CostPrice extends Eloquent
{
    use HasFactory;

    protected $table = 'cost_prices';

    public $fillable = [
        'id',
        'id_product',
        'quantity',
        'cost',
    ];

    
    public function product(){
        return $this->belongsTo(Product::class, 'id_product');
    }
}
