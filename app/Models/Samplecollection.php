<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Samplecollection extends Authenticatable
{
    use HasFactory;
    protected $table="booksamplecollection";
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'package',
        'test',
        'userid'
        
    ];
}
