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
        Schema::create('evaluasi_kesehatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id');
            $table->decimal('bmi', 4, 2);
            $table->decimal('vo2_max', 3, 1);
            $table->decimal('kekuatan_otot', 3, 1);
            $table->decimal('fleksibilitas', 3, 1);
            $table->decimal('daya_tahan_kardiovaskular', 3, 1);
            $table->date('tanggal_evaluasi');
            $table->timestamps();

            //Foreign Key
            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi_kesehatans');
    }
};
