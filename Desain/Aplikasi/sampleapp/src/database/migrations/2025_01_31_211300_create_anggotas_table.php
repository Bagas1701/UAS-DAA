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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->decimal('berat_badan', 3, 1);
            $table->decimal('tinggi_badan', 4, 1);
            $table->enum('tujuan', ['Menurunkan Berat Badan', 'Kebugaran Umum', 'Membangun Otot', 'Rehabilitasi']);
            $table->text('riwayat_kesehatan')->nullable();
            $table->text('aktivitas_harian')->nullable();
            $table->unsignedBigInteger('program_id');
            $table->decimal('skor_kebugaran', 3, 1);
            $table->timestamps();

            //Foreign Key
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
