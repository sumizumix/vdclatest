<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ctscan extends Authenticatable
{
    use HasFactory;
    protected $table="ctscan";
    protected $fillable = [
        'patient_name',
        'phone',
        'email',
        'date',
        'additional'
        
    ];
}
