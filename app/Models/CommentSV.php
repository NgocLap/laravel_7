<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentSV extends Model
{
    protected $table ='vp_commentser';
    protected $primaryKey = 'com_id';
    protected $guarded = [];
}