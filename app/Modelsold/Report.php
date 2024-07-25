<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Report extends Authenticatable
{
    use HasFactory;
    protected $table="report";
    protected $fillable = [
        'testdate',
        'reportdate',
        'name',
        'phone',
        'report'
        
    ];
}
