<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penjualan', function (Blueprint $table) {
            $table->bigIncrements('id_dp');
            $table->unsignedBigInteger('jenis_pupuk_id');
            $table->foreign('jenis_pupuk_id')->references('id_jenis_pupuk')->on('jenis_pupuk');
            $table->integer('tahun');
            $table->string('bulan',50);
            $table->integer('terjual');
            $table->integer('interval_awal');
            $table->integer('interval_akhir');
            $table->unsignedBigInteger('bilangan_acak_id');
            $table->foreign('bilangan_acak_id')->references('id_bilangan_acak')->on('bilangan_acak');
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
        Schema::dropIfExists('data_penjualan');
    }
}
