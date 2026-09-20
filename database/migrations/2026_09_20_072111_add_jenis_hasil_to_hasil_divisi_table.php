<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('hasil_divisi', function (Blueprint $table) {
            $table->string('jenis_hasil')->after('keterangan');
        });
    }

    public function down(): void
    {
        Schema::table('hasil_divisi', function (Blueprint $table) {
            $table->dropColumn('jenis_hasil');
        });
    }
};