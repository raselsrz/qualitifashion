<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // $table->id();
    // $table->string('name');
    // $table->string('email');
    // $table->string('phone')->nullable();
    // $table->text('message');
    // $table->timestamps();

    protected $fillable = ['name', 'email', 'phone', 'message'];

    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

}
