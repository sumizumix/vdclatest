<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    use HasFactory;
    protected $table='users';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'role_id',
        
    ];
}
