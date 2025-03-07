<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'city',
        'address',
        'product_id',
        'subtotal',
        'total',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    

}
