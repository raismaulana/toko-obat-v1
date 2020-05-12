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

class suplemen extends Model
{
    protected $table = "suplemen";

    protected $primaryKey = "id_suplemen";

    protected $fillable = [
        "kode_suplemen",
    	"foto_suplemen",
    	"nama_suplemen",
        "fungsi_suplemen",
    	"id_supplier",
    	"nama_supplier",
    	"harga_suplemen",
    	"stok",
        "stok_terjual",
    	"total_penjualan",
    	"total_pemasukan"
    ];
}
