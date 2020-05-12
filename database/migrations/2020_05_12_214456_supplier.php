<!-- =========================================================================================
  Name: Toko Obat V1 Website
  Author: Muhammad Fauzan
  Author URL: http://fauzanishere.my.id
  Repository: https://github.com/fauzan121002/toko-obat-v1
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Supplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id_supplier');
            $table->string('kode_supplier');
            $table->string('nama_supplier');
            $table->text('deskripsi_supplier');
            $table->integer('jumlah_pengiriman')->nullable();
            $table->string('status');
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
        //
    }
}
