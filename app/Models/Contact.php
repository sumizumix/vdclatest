<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contact extends Authenticatable
{
    use HasFactory;
    protected $table="usercontact";
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
    ];
}
