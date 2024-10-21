<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tlog extends Model
{
    protected $fillable = ['tanggal', 'jam', 'keterangan'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
