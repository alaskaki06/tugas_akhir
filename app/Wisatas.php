<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisatas extends Model
{
    public $timestamps = true;
    protected $fillable = ['nama','deskripsi','alamat','waktu','kategori','harga_tiket','link_map','background','tips','telepon'];
}
