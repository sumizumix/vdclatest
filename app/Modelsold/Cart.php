<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cart extends Authenticatable
{
    use HasFactory;
    protected $table="cart";
    protected $fillable = [
        'user_id',
        'product_id',
        'phoquantity',
       
        
    ];
}
