<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peminjamanController extends Controller{
    public function index(){
        $barangs = \App\Barang::paginate(20);
        return view('peminjaman/index', ['barangs'=>$barangs]);
    }
    public function pinjam(Request $request){
        // dd($request->all());
        Pinjam::create([
            'nama_peminjam' => $request ->nama,
            'kelas_peminjam' => $request ->kelas,
            'ruangan_peminjam' => $request ->ruangan,
            'id_barang' => $request ->barang,
            'status' => 'Di Pinjam'
        ]); 
        return redirect('pinjamBarang');
    }
}

?>