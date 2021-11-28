<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentDiscount extends Model
{
    protected $table ='vp_commentprdiscount';
    protected $primaryKey = 'comdiscount_id';
    protected $guarded = [];
}
