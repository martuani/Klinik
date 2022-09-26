<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class levels extends Model
{
    //
    protected $table = "level";
    protected $guarded = [];

    public function Petugas(){
        return $this->belongsTo('App\Petugas_level',"petugas_level", "petugas level");
    }
}