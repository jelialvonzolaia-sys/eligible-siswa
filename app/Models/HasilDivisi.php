<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilDivisi extends Model
{
    protected $table = 'hasil_divisi';

    protected $fillable = [
        'student_id',
        'divisi',
        'keterangan',
        'jenis_hasil',
        'keterangan_pengumuman',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}