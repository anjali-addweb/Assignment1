<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="categories";
    public $timestamps=false;
    protected $fillable=['cate_id','cate_name'];
}
