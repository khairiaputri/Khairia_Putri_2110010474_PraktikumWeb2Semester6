<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
public function cetakSembako()
    {
        $viewsembako = DB::table('viewsembako')->select('*')->get();
        $data = [
            'viewsembako' => $viewsembako,
            'tanggal' => date('d/m/y'),
            'judul' => "Laporan Data Sembako"
        ];

        $laporan = PDF::loadView('sembako.laporan', $data)->setPaper('f4', 'landscape');
        $namaTGL = substr(date('d/m/y'), 0, 2) . substr(date('d//m/y'), 3, 2) . substr(date('d/m/y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        return $laporan->stream('Lap' . $namaTGL . $namaJAM . '.pdf');
    }
    public function cetakRumah(){
$viewrumah=DB::table('viewrumah')->select('*')->get();
$data=[
    'viewrumah'=>$viewrumah,
    'tanggal'=>date('d/m/y'),
    'judul'=>"Laporan Data Bantuan Bedah Rumah"
];

$laporan = PDF::loadView('rumah.laporan',$data)->setPaper('f4','landscape');
$namaTGL=substr(date('d/m/y'),0,2).substr(date('d//m/y'),3,2).substr(date('d/m/y'),6,4);
$namaJAM=substr(date('h:i:s'),0,2).substr(date('h:i:s'),3,2).substr(date('h:i:s'),6,2);
return $laporan->stream('Lap'.$namaTGL.$namaJAM.'.pdf');
}   //
 public function cetakTunai(){
$viewtunai=DB::table('viewtunai')->select('*')->get();
$data=[
    'viewtunai'=>$viewtunai,
    'tanggal'=>date('d/m/y'),
    'judul'=>"Laporan Data Bantuan Tunai"
];

$laporan = PDF::loadView('tunai.laporan',$data)->setPaper('f4','landscape');
$namaTGL=substr(date('d/m/y'),0,2).substr(date('d//m/y'),3,2).substr(date('d/m/y'),6,4);
$namaJAM=substr(date('h:i:s'),0,2).substr(date('h:i:s'),3,2).substr(date('h:i:s'),6,2);
return $laporan->stream('Lap'.$namaTGL.$namaJAM.'.pdf');
}   //
 public function cetakPenduduk(){
$penduduks=DB::table('penduduks')->select('*')->get();
$data=[
    'penduduks'=>$penduduks,
    'tanggal'=>date('d/m/y'),
    'judul'=>"Laporan Data Penduduk"
];

$laporan = PDF::loadView('penduduk.laporan',$data)->setPaper('f4','landscape');
$namaTGL=substr(date('d/m/y'),0,2).substr(date('d//m/y'),3,2).substr(date('d/m/y'),6,4);
$namaJAM=substr(date('h:i:s'),0,2).substr(date('h:i:s'),3,2).substr(date('h:i:s'),6,2);
return $laporan->stream('Lap'.$namaTGL.$namaJAM.'.pdf');
}   //
 //
}