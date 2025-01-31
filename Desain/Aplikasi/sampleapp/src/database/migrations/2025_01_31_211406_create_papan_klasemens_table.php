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
        Schema::create('papan_klasemens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id');
            $table->decimal('skor', 4, 1);
            $table->char('peringkat');
            $table->enum('status', ['Berhasil', 'Butuh Bimbingan']);
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
        Schema::dropIfExists('papan_klasemens');
    }
};
