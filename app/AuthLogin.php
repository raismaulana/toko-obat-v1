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
