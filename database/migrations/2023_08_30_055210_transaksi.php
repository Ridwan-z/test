<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    public function up()
    {
        Schema::create('tbl_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->string('id_kamera');
            $table->string('lama_sewa');
            $table->string('total_harga');
            $table->string('total_bayar');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        schema::dropIfExists('tbl_transaksi');
    }
}