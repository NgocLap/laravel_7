<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table ='vp_service';
    protected $primaryKey = 'ser_id';
    protected $guarded = [];
}
