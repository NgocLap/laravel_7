<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table ='vp_event';
    protected $primaryKey = 'event_id';
    protected $guarded = [];
}
