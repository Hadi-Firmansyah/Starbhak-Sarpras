<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

class BarangController extends Controller
{
    public function cetak_pdf(){
        $barang = Barang::all();

        $pdf = PDF::loadview('barang/barang_pdf',['barang'=>$barang]);
        return $pdf->download('laporan-data-barang-pdf');
    }

    public function export_excel(){
        return Excel::download(new BarangExport, 'Barang.xlsx');
    }
}
