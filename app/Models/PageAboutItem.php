<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageAboutItem extends Model
{

protected $table='pageaboutitem';
    protected $fillable = [
        'name',
         'description',
         'vision',
         'mission',
         'seotitle',
         'seodescription'

    ];

}
