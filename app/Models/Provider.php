<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Provider extends Eloquent 
{
    use HasFactory;

    public $fillable = [
        'name',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
