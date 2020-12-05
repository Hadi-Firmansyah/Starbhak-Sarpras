<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjams';
    protected $primarykey = 'id';
    protected $fillable = ['nama_peminjam', 'kelas_peminjam', 'ruangan_peminjam', 'id_barang', 'status', 'created_at', 'updated_at'];
}
