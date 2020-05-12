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

class KategoriObat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_obat', function (Blueprint $table) {
            $table->increments('id_kategoriobat');
            $table->string('kode_kategoriobat');
            $table->string('nama_kategoriobat');
            $table->longText('deskripsi_kategoriobat');
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
