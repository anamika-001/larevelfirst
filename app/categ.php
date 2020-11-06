<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categ extends Model
{
    //

    protected $table = 'category';
    protected $fillable=['title','product'];

   
}
