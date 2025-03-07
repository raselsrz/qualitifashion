<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'old_price',
        'image',
        'status',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    

}
