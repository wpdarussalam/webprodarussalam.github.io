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
        Schema::create('kepala__c_b_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('NIP');
            $table->string('nama');
            $table->string('user_name');
            $table->string('password');
            $table->string('email');
            $table->string('kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala__c_b_t_s');
    }
};
