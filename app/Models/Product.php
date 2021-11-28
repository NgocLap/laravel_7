<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='vp_products';
    protected $primaryKey = 'prod_id';
    protected $guarded = [];
    protected $fillable = ['prod_name','prod_status','prod_slug'];
}
