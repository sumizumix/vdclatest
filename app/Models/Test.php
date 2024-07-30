<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Test extends Authenticatable
{
    use HasFactory;
    protected $table="test";
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'seotitle',
        'seodescription',
        'parameter',
        'testcode',
        'Schedule',
        'prerequisite',
        'reporttime'
        
    ];
}
