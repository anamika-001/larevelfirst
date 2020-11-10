<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class categ extends Model
{
    
    protected $table = 'category';
    protected $fillable=['title','product'];

}
