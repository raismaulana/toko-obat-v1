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

class transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id_transaksi";
    protected $fillable = [ 
    	"kode_transaksi",
    	"nama_pesanan",
    	"jumlah_pesanan",
    	"uang_diterima",
    	"kode_kasir",
    	"nama_kasir"
    ];
}
