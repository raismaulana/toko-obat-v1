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

class jenisobat extends Model
{
    protected $table = "jenis_obat";
    protected $primaryKey = "id_jenisobat";
    protected $fillable = [
    	"kode_jenisobat",
    	"nama_jenisobat",
    	"deskripsi_jenisobat"
    ];
}
