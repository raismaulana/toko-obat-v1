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

class kasir extends Model
{
	protected $fillable = ["kode_kasir",'foto_kasir','nama_kasir','username','password','email','jenis_kelamin','tanggal_lahir','pendidikan_terakhir','nomor_telepon','alamat','jumlah_transaksi'];
	protected $primaryKey = "id_kasir";
    protected $table = "kasir";
}
