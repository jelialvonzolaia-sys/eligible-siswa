<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('nisn', 'nim');

            $table->dropColumn([
                'tanggal_lahir',
                'status_eligible',
                'peringkat',
                'nilai_rata',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('nim', 'nisn');

            $table->date('tanggal_lahir')->nullable();
            $table->boolean('status_eligible')->default(false);
            $table->integer('peringkat')->nullable();
            $table->float('nilai_rata')->nullable();
        });
    }
};