<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;


class Provider extends Eloquent 
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'name',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
