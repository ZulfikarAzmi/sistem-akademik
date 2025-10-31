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
           Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('dosen_id')->nullable();
            $table->integer('sks');
            $table->integer('semester');
            $table->enum('tipe', ['wajib', 'pilihan']);
            $table->timestamps();

            // relasi
            $table->foreign('prodi_id')->references('id')->on('prodis')->onDelete('cascade');
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliahs');
    }
};
