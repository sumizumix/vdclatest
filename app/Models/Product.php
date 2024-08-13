<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class Product extends Authenticatable
{
    use HasFactory;
    protected $table="product";
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'seotitle',
        'seodescription',
        'parameter',
        'noparameter',
        'prerequisite',
        'reporttime',
        'slug',


    ];



    public function up()
{
    Schema::table('product', function (Blueprint $table) {
        $table->string('parameters')->nullable();
    });
}


protected static function boot() {
    parent::boot();

    static::creating(function ($product) {
        $product->slug = Str::slug($product->name);
    });
    static::updating(function ($product) {
        $product->slug = Str::slug($product->name);
});
}
}




