<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Eloquent
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'id',
        'reference_number',
        'name',
        'id_provider',
    ];

    public function provider() {
        return $this->belongsTo(Provider::class, 'id_provider');
    }
}
