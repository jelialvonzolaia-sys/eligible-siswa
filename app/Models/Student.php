<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'nama',
        'nisn',
        'tanggal_lahir',
        'status_eligible',
        'peringkat',
        'nilai_rata'
    ];
}