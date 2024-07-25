<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class center extends Model
{
    use HasFactory;
    protected $table="center";
    protected $fillable = [
        'name',
        'email',
        'location',
        'phone',
        'address',
        'time',
        'mapcode',
        'maplink',
        'seotitle',
        'seodescription'



    ];
}
