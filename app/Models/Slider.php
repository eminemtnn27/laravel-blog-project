<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='articles';
    protected $fillable=['title','image','slug','content'];
}
