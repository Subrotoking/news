<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'published',
        'id_kategori'
        ];
    public function pencipta()
    {
        return $this->hasOne('App\Pencipta','id_berita');
    }
    public function kategori()
    {
    return $this->belongsTo('App\Kategori','id_kategori');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Tag','tag_post','id_post','id_tag')->withTimeStamps();
    }
    public function getTagPostAttribute()
    {
        return $this->tag->pluck('id')->toArray();
    }
}
