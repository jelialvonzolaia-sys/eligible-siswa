<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CheckController extends Controller
{
    public function check(Request $request)
    {
        // ambil input
        $nisn = $request->nisn;

        // rapikan format tanggal (biar selalu 2 digit)
        $tanggal = str_pad($request->tanggal, 2, '0', STR_PAD_LEFT);
        $bulan   = str_pad($request->bulan, 2, '0', STR_PAD_LEFT);

        // gabungkan jadi format YYYY-MM-DD
        $tanggal_lahir = $request->tahun . '-' . $bulan . '-' . $tanggal;

        // cari data di database
        $student = Student::where('nisn', $nisn)
            ->where('tanggal_lahir', $tanggal_lahir)
            ->first();

        // kalau data tidak ditemukan
        if (!$student) {
            return back()->with('error', 'Data tidak ditemukan');
        }

        // kirim data ke halaman hasil
        return view('result', compact('student'));
    }
}