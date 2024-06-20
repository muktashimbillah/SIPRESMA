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
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama_kegiatan');
            $table->string('tingkat');
            $table->boolean('akademik');
            $table->string('juara')->nullable();
            $table->date('tanggal_kegiatan');
            $table->string('bukti_kegiatan')->nullable();
            $table->string('foto_diri')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
