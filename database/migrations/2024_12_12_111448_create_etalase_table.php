<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtalaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etalases', function (Blueprint $table) {
        $table->id();
        $table->string('nama_barang');
        $table->text('deskripsi')->nullable();
        $table->integer('stock')->default(0)->unsigned();
        $table->string('kode_barang')->unique();
        $table->string('harga');
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
        Schema::dropIfExists('etalases');
    }
}
