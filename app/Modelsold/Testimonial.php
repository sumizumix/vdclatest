<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Testimonial extends Authenticatable
{
    use HasFactory;
    protected $table="testimonial";
    protected $fillable = [
        'image',
        'name',
        'description',

        
        
    ];
}
