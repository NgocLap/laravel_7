<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table ='vp_menu';
    protected $primaryKey = 'menu_id';
    protected $guarded = [];
}
