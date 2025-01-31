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
        Schema::create('latihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('aktivitas');
            $table->string('durasi');
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
        Schema::dropIfExists('latihans');
    }
};
