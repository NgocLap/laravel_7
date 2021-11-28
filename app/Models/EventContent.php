<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventContent extends Model
{
    protected $table ='vp_eventcontent';
    protected $primaryKey = 'evcontent_id';
    protected $guarded = [];
}
