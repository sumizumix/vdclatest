<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hospital extends Authenticatable
{
    use HasFactory;
    protected $table="hospital";
    protected $fillable = [
        'name',
        'address',
        'phone',
        'image',
        'website',
        'mapcode',
        'maplink',
        'seotitle',
        'seodescription'
        
    ];
}
