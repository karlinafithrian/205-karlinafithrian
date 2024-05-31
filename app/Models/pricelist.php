<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricelist extends Model
{
    use HasFactory;

    protected $table = "pricelist";
    protected $fillabel = ['id','namapaket','keterangan','harga'];

}
