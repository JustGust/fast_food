<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_cost extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_product',
        'id_size',
        'cost'
    ];
}
