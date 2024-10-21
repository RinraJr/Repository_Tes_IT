<?php

namespace App\Observers;

use App\Karyawan;
use App\Tlog;
use Carbon\Carbon;

class KaryawanObserver
{
    /**
     * Handle the karyawan "created" event.
     *
     * @param  \App\Karyawan  $karyawan
     * @return void
     */
    public function created(Karyawan $karyawan)
    {
        Tlog::create([
            'tanggal' => Carbon::now()->toDateString(),
            'jam' => Carbon::now()->toTimeString(),
            'keterangan' => "Data karyawan {$karyawan->nama} telah ditambahkan."
        ]);
    }

    /**
     * Handle the karyawan "updated" event.
     *
     * @param  \App\Karyawan  $karyawan
     * @return void
     */
    public function updated(Karyawan $karyawan)
    {
        Tlog::create([
            'tanggal' => Carbon::now()->toDateString(),
            'jam' => Carbon::now()->toTimeString(),
            'keterangan' => "Data karyawan {$karyawan->nama} telah diupdate."
        ]);
    }
    /**
     * Handle the karyawan "deleted" event.
     *
     * @param  \App\Karyawan  $karyawan
     * @return void
     */
    public function deleted(Karyawan $karyawan)
    {
        Tlog::create([
            'tanggal' => Carbon::now()->toDateString(),
            'jam' => Carbon::now()->toTimeString(),
            'keterangan' => "Data karyawan {$karyawan->nama} telah dihapus."
        ]);
    }
}
