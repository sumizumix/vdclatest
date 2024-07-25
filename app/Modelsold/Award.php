<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Award extends Authenticatable
{
    use HasFactory;
    protected $table="award";
    protected $fillable = [
        'name',
        'description',
       
        
        
    ];
}
