<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Banner extends Authenticatable
{
    use HasFactory;
    protected $table="appointment";
    protected $fillable = [
        'name',
        'phone',
        'email',
        'gender',
        'prescription'
        
        
    ];
}
