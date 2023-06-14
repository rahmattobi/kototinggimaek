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
        Schema::create('datakks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_kk');
            $table->string('nama_kepalaKeluarga');
            $table->string('alamat');
            $table->string('rtrw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->bigInteger('kodepos');
            $table->string('provinsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakks');
    }
};
