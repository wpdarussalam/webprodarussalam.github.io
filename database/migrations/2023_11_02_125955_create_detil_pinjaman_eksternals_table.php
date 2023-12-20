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
        Schema::create('detil_pinjaman_eksternals', function (Blueprint $table) {
            $table->id();
            $table->string('id_peminjaman');
            $table->string('nama_penanggung_jawab');
            $table->string('no_kontak');
            $table->string('id_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detil_pinjaman_eksternals');
    }
};
