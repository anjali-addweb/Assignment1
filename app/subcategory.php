<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $table="subcategories";
    public $timestamps=false;
    protected $fillable=['sub_id','sub_name','cate_id'];
}
