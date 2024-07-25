<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Authenticatable
{
    use HasFactory;
    protected $table="team";
    protected $fillable = [
        'image',
        'name',
        'designation',

        
        
    ];
}
