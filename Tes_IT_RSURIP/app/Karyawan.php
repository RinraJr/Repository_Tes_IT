<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['nama', 'tgl_lahir', 'gaji'];

    public function logs()
    {
        return $this->hasMany(Tlog::class);
    }
}
