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
        Schema::create('keluhan_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pelanggan');
            $table->string('nama_pelanggan');
            $table->string('nomor_hp');
            $table->text('keterangan');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan_pelanggan');
    }
};
