<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengembalian;

class pengembalianController extends Controller{
    public function index(){
        $pinjams = \App\Pinjam::paginate(20);
        return view('pengembalian/index', ['pinjams'=>$pinjams]);
    }
    public function pengembalian(Request $request){
        Pengembalian::create([
            'id_pinjam' => $request ->id,
            'nama_yangbalikin' => $request ->nama,
            'kelas_yangbalikin' => $request ->kelas
        ]); 
        return redirect('pengembalianBarang');
    }
}

?>