<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\DataKlien;

class PresensiController
{
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|in:Sakit,Izin,Hadir',
        ]);

        Presensi::update([
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.presensi');
    }

    public function index()
    {
        $presensi = Presensi::with('dataKlien')->get();

        return view('admin.presensi', compact('presensi'));
    }
}

