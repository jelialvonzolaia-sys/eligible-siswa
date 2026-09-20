<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CheckController extends Controller
{
    public function check(Request $request)
    {
        // ambil NIM dari input
        $nim = $request->nim;

        // cari mahasiswa berdasarkan NIM
        $student = Student::where('nim', $nim)
            ->with('hasilDivisi')
            ->first();

        // kalau data tidak ditemukan
        if (!$student) {
            return back()->with('error', 'Data tidak ditemukan');
        }

        // kirim data ke halaman hasil
        return view('result', compact('student'));
    }
}