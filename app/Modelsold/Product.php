<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    use HasFactory;
    protected $table="product";
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        
    ];
}
