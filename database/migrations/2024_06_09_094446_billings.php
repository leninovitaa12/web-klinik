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
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-increment primary key

            // Menambahkan foreign key constraint
            $table->bigInteger('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->on('data_kliens')->onDelete('cascade');
            $table->index('id_client');

            // Menggunakan metode default untuk kolom enum
            $table->enum('is_active', ['Aktif', 'Tidak Aktif'])->default('Aktif')->nullable();
            $table->enum('bill_status', ['Sudah Bayar', 'Belum Bayar'])->default('Belum Bayar')->nullable();

            // Waktu Pembuatan
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
