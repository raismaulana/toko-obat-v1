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

class obat extends Model
{
    protected $table = "obat";
    protected $primaryKey = "id_obat";
    protected $fillable = [
    	"kode_obat","foto_obat","nama_obat","fungsi_obat","nama_kategoriobat","nama_jenisobat","id_supplier","nama_supplier",
    	"harga_obat","stok","stok_terjual","total_penjualan","total_pemasukan"
    ];
}
