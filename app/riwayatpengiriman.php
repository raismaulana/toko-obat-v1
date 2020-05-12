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

class riwayatpengiriman extends Model
{
    protected $table = "riwayat_pengiriman";

    protected $primaryKey = "id_riwayatpengiriman";

    protected $fillable = [
    	"id_supplier",
    	"kode_pengiriman",
    	"nama_supplier",
    	"barang_dikirim",
    	"jumlah_dikirim"
    ];
}
