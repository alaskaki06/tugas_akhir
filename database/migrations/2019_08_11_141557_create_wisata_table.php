<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('alamat');
            $table->string('waktu')->nullable();
            $table->string('kategori');
            $table->string('harga_tiket')->nullable();
            $table->text('link_map');
            $table->text ('tips');
            $table->string('background');
            $table->string('telepon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisata');
    }
}
