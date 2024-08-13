<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
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
        'reporttime',
        'slug',
        
    ];


    protected static function boot() {
        parent::boot();
    
        static::creating(function ($test) {
            $test->slug = Str::slug($test->name);
        });
        static::updating(function ($test) {
            $test->slug = Str::slug($test->name);
    });
    }
}
