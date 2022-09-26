<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwals extends Model
{
    //
    protected $table = 'jadwal';
    protected $primaryKey = 'jadwal_id';
    protected $fillable = ['jadwal_hari', 'jadwal_shift', 'jadwal_dari', 'jadwal_sampai'];
    protected $guarded = [];
    
    public function petugas() {
        return $this->belongsTo(Petugas::class, 'jadwal_id', 'petugas_jadwal');
    }
}