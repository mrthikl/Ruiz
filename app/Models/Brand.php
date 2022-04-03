<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'brand_id';  
    protected $fillable = [
        'brand_name',
        'brand_desc',
        'brand_status',
    ];
}
