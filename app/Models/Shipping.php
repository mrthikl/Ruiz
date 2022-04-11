<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $table = 'shipping';
    protected $primaryKey = 'shipping_id';
    protected $fillable = [
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'shipping_address',
        'shipping_message',
        'payment_method',
        'payment_status',
    ];
}
