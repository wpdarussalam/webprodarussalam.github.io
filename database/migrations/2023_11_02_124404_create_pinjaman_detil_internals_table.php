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
        Schema::create('pinjaman_detil_internals', function (Blueprint $table) {
            $table->id();
            $table->string('id_peminjaman');
            $table->string('id_userprodi');
            $table->string('nama_penanggung_jawab');
            $table->string('no_kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman_detil_internals');
    }
};
