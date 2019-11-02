<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['nama_tag'];
    public function post()
    {
    return $this->belongsToMany('App\Post','tag_post','id_tag','id_post');
    }
}
