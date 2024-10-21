<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use App\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Karyawan::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'gaji' => 'required|numeric',
        ]);

        $karyawan = Karyawan::create($request->all());

        return response()->json($karyawan, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::find($id);

        if (!$karyawan) {
            return response()->json(['message' => 'Karyawan tidak ditemukan'], 404);
        }

        return response()->json($karyawan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'gaji' => 'required|numeric',
        ]);

        $karyawan = Karyawan::find($id);

        if (!$karyawan) {
            return response()->json(['message' => 'Karyawan tidak ditemukan'], 404);
        }

        $karyawan->update($request->all());

        return response()->json($karyawan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);

        if (!$karyawan) {
            return response()->json(['message' => 'Karyawan tidak ditemukan'], 404);
        }

        $karyawan->delete();

        return response()->json(['message' => 'Karyawan berhasil dihapus']);
    }

    public function printPdf()
    {
        $karyawan = Karyawan::all();
        $pdf = app('dompdf.wrapper'); // Get the PDF instance
        $pdf->loadView('karyawan.pdf', compact('karyawan'));

        return $pdf->download('laporan_karyawan.pdf');
    }
}
