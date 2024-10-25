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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan', 100); // Nama ruangan
            $table->integer('kapasitas')->default(0); // Kapasitas ruangan
            $table->enum('tipe_ruangan', ['ruang_kelas', 'lab', 'ruang_diskusi']); // Enum tipe ruangan
            $table->boolean('tersedia')->default(true); // Boolean untuk status ketersediaan
            $table->string('fasilitas', 255); // Fasilitas
            $table->string('gambar')->nullable(); // Gambar ruangan (path)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
