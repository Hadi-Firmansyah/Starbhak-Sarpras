<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalians';
    protected $primarykey = 'id';
    protected $fillable = ['id_pinjam', 'nama_yangbalikin', 'kelas_yangbalikin', 'created_at', 'updated_at'];
}
