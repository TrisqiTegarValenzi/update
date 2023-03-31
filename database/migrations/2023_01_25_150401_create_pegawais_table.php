<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_pekerjaan');
            $table->string('nama_p');
            $table->bigInteger('notelp');
            $table->enum('jenis', ['Laki-Laki', 'Perempuan']);
            $table->foreign('id_pekerjaan')->references('id')->on('pekerjaans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pegawais');
    }
};
