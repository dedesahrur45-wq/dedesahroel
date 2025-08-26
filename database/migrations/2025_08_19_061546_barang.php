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
       Schema::create('barang', function (Blueprint $table) {
        $table->id();
        $table->string('namabarang');
        $table->string('kodeinventaris');
        $table->integer('kategoriid');
        $table->integer('ruanganid');
        $table->string('tahunpengadaan');
        $table->string('sumberdana');
        $table->string('kondisi');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
