<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pencipta extends Model
{
    protected $table='pencipta';
    protected $primaryKey = 'id_berita';
    protected $fillable = ['id_berita','nama_pencipta'];
    
    public function posts(){
        return $this->belongsTo('App\Post','id_berita');
    }
}
