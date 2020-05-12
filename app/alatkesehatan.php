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

class alatkesehatan extends Model
{
    protected $table = "alat_kesehatan";

    protected $primaryKey = "id_alatkesehatan";

    protected $fillable = [
        "kode_alatkesehatan",
    	"foto_alatkesehatan",
    	"nama_alatkesehatan",
        "fungsi_alatkesehatan",
    	"id_supplier",
    	"nama_supplier",
    	"harga_alatkesehatan",
    	"stok",
    	"total_penjualan",
    	"total_pemasukan"
    ];
}
