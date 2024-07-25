<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Locationitem extends Authenticatable
{
    use HasFactory;
    protected $table="locationitem";
    protected $fillable = [
        'address',
        'phone',
        'email'
        
        
    ];
}
