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
        Schema::create('penginapans', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->string('nama_penginapan');
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
            $table->text('detail')->nullable();
            $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penginapans');
    }
};
