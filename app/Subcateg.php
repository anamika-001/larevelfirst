<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcateg extends Model
{
    protected $table = 'subcategories';
    protected $fillable=['catg_id','subcateg','name'];
}
