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
        Schema::create('presensis', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-increment primary key

            // Menambahkan foreign key constraint
            $table->bigInteger('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->on('data_kliens')->onDelete('cascade');
            $table->index('id_client');

            // Menggunakan metode default untuk kolom enum
            $table->enum('keterangan', ['Sakit', 'Izin', 'Hadir'])->nullable();
            $table->timestamps();
        });
      
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
