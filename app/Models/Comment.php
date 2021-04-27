<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    protected $fillable = [
        'name', 'email', 'message',
    ];
    function getComment(){
        return $this->hasMany('App\Models\Article','id','article_id');}
}
