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
        Schema::create('data_kliens', function (Blueprint $table) {
            $table->bigIncrements('id'); // Menggunakan bigIncrements untuk id auto-increment
            $table->string('nama');
            $table->bigInteger('nik')->unique();
            $table->string('nama_wali');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->enum('paket', ['1', '2', '3', 'home visit']);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            // Waktu Pembuatan
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kliens');
    }
};
