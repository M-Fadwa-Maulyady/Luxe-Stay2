<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penginapan_fasilitas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('penginapan_id');
            $table->unsignedBigInteger('fasilitas_id');

            // foreign key
            $table->foreign('penginapan_id')->references('id')->on('penginapans')->onDelete('cascade');
            $table->foreign('fasilitas_id')->references('id')->on('fasilitas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penginapan_fasilitas');
    }
};
