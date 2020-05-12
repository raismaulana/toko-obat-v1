<!-- =========================================================================================
  Name: Toko Obat V1 Website
  Author: Muhammad Fauzan
  Author URL: http://fauzanishere.my.id
  Repository: https://github.com/fauzan121002/toko-obat-v1
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriobat extends Model
{
	protected $fillable = ["kode_kategoriobat","nama_kategoriobat","deskripsi_kategoriobat"];
	protected $primaryKey = "id_kategoriobat";
    protected $table = "kategori_obat";
}
