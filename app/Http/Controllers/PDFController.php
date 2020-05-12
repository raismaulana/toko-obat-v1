<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\obat;
use App\alatkesehatan;
use App\kasir;
use App\kategoriobat;
use App\jenisobat;
use App\suplemen;
use App\supplier;

class PDFController extends Controller
{
    public function laporan_kasir(Request $request)
    {
        $data['kasir'] = kasir::select('kode_kasir','foto_kasir','nama_kasir','jumlah_transaksi')
        ->get();
        $pdf = PDF::loadView('pdf.kasir', $data);
        return $pdf->stream();
    }

    public function laporan_kategori(Request $request)
    {
        $data['kategori'] = kategoriobat::select('kode_kategoriobat','nama_kategoriobat','deskripsi_kategoriobat')
        ->get();
        $pdf = PDF::loadView('pdf.kategori-obat', $data);
        return $pdf->stream();
    }

    public function laporan_jenis(Request $request)
    {
        $data['jenisobat'] = jenisobat::select('kode_jenisobat','nama_jenisobat','deskripsi_jenisobat')
        ->get();
        $pdf = PDF::loadView('pdf.jenis-obat', $data);
        return $pdf->stream();
    }

    public function laporan_obat(Request $request)
    {
        $data['obat'] = obat::select('kode_obat','foto_obat','nama_obat')
        ->get();
        $pdf = PDF::loadView('pdf.obat', $data);
        return $pdf->stream();
    }

    public function laporan_alatkesehatan(Request $request)
    {
        $data['alatkesehatan'] = alatkesehatan::select('kode_alatkesehatan','foto_alatkesehatan','nama_alatkesehatan')
        ->get();
        $pdf = PDF::loadView('pdf.alat-kesehatan', $data);
        return $pdf->stream();
    }  

    public function laporan_suplemen(Request $request)
    {
        $data['suplemen'] = suplemen::select('kode_suplemen','foto_suplemen','nama_suplemen')
        ->get();
        $pdf = PDF::loadView('pdf.suplemen', $data);
        return $pdf->stream();
    }

    public function laporan_supplier(Request $request)
    {
        $data['supplier'] = supplier::select('kode_supplier','nama_supplier','status')
        ->get();
        $pdf = PDF::loadView('pdf.supplier', $data);
        return $pdf->stream();
    }    
}
