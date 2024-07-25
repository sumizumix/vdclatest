<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model {
    use HasFactory;
    protected $table = 'payment';
    protected $guarded = ['id'];
    protected $fillable = [
        'r_payment_id',
        'method',
        'currency',
        'user_email',
        'amount',
        'json_response',
        'userid'
        
    ];
}

