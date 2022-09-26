<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    //
    protected $table = 'petugas';
    
    protected $primaryKey = 'petugas_id';
    protected $fillable = ['petugas_nama','petugas_email','petugas_password','petugas_jadwal','petugas_telp','petugas_level'];
 
    public function jadwal() {
        return $this->hasMany(Jadwal::class, 'petugas_jadwal', 'jadwal_id');
    }
}