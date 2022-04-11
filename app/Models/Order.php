<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'user_id',
        'shipping_id',
        'order_detail',
        'order_status',
        'order_total',
    ];
}
