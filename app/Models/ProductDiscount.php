<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    protected $table ='vp_productdiscount';
    protected $primaryKey = 'discount_id';
    protected $guarded = [];
}
