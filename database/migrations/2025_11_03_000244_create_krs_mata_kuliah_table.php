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
        Schema::create('krs_mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('krs_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mata_kuliah_id')->constrained()->cascadeOnDelete();
            
            $table->string('nilai_huruf')->nullable(); // A, B+, C, dst
            $table->decimal('nilai_angka', 4, 2)->nullable(); // 4.00, 3.50, dst
            $table->enum('status', ['belum dinilai', 'lulus', 'tidak lulus'])->default('belum dinilai');

            $table->timestamps();

            $table->unique(['krs_id', 'mata_kuliah_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs_mata_kuliah');
    }
};
