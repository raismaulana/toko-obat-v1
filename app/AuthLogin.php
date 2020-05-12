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

class AuthLogin extends Model
{
    protected $table = "kasir";
    protected $primaryKey = "id_kasir";
    protected $fillable = [
    	"email",
    	"password"
    ];
}
