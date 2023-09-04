<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksi extends Migration
{
    public function up()
    {
        Schema::create('tbl_detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->string('id_barang');
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
        schema::dropIfExists('tbl_detail_transaksi');
    }
}
    