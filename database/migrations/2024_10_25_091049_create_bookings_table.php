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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ruangan_id')->constrained('ruangans')->onDelete('cascade'); // Relasi ke ruangan
            $table->string('nama_pemesan', 100); // Nama pemesan
            $table->date('tanggal'); // Tanggal pemesanan
            $table->time('waktu_mulai'); // Waktu mulai
            $table->time('waktu_selesai'); // Waktu selesai
            $table->string('surat_permohonan')->nullable(); // File surat permohonan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
