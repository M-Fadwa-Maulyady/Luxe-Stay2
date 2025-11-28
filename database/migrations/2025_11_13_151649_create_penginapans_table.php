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
            $table->string('gambar')->nullable();              // gambar utama
            $table->json('gallery')->nullable();               // banyak gambar
            $table->string('nama_penginapan');
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
            $table->text('detail')->nullable();
            $table->string('alamat')->nullable();              // lokasi teks
            $table->decimal('latitude', 10, 7)->nullable();    // titik lokasi
            $table->decimal('longitude', 10, 7)->nullable();
            $table->boolean('is_promo')->default(false);       // status promo
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
