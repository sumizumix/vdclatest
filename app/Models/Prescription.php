<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prescription extends Authenticatable
{
    use HasFactory;
    protected $table="prescription";
    protected $fillable = [
        'name',
        'phone',
        'prescription',
        
    ];
}
