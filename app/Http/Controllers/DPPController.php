<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DPPController extends Controller
{
    public function dpp()
    {
        $dpp = DB::table('data_penjualan')
        ->join('jenis_pupuk', 'data_penjualan.jenis_pupuk_id', '=', 'jenis_pupuk.id_jenis_pupuk')
        ->get();
        // dd($dpp);
        return view('data_pupuk.dpp',compact('dpp'));
    }

    public function createdpp()
    {
        // $bulan = DB::table('bulan')->get();
        return view('data_pupuk.createdpp');
    }

    public function hitung(Request $request)
    {
        if($request->has('hitung'))
        {
            [
                $jenis_pupuk = $request->jenis_pupuk,
                $tahun = $request->tahun,
                $Januari = $request->Januari,
                $Febuari = $request->Febuari,
                $Maret = $request->Maret,
                $April = $request->April,
                $Mei = $request->Mei,
                $Juni = $request->Juni,
                $Juli = $request->Juli,
                $Agustus = $request->Agustus,
                $September = $request->September,
                // $Oktober = $request->Oktober,
                // $November = $request->November,
                // $Desember = $request->Desember,
            ];
                // $data = $request->all();
        }
        
        return view('data_pupuk.perhitungan',compact(
            'tahun',
            'jenis_pupuk',
            'Januari',
            'Febuari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            // 'Oktober',
            // 'November',
            // 'Desember',
        ));
    }

    public function perhitungan (Request $request)
    {
        $data = [
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b1,'terjual'=>$request->januari,'interval_awal'=>$request->awal1,'interval_akhir'=>$request->akhir1,'bilangan_acak_id'=>$request->n1],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b2,'terjual'=>$request->febuari,'interval_awal'=>$request->awal2,'interval_akhir'=>$request->akhir2,'bilangan_acak_id'=>$request->n2],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b3,'terjual'=>$request->maret,'interval_awal'=>$request->awal3,'interval_akhir'=>$request->akhir3,'bilangan_acak_id'=>$request->n3],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b4,'terjual'=>$request->april,'interval_awal'=>$request->awal4,'interval_akhir'=>$request->akhir4,'bilangan_acak_id'=>$request->n4],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b5,'terjual'=>$request->mei,'interval_awal'=>$request->awal5,'interval_akhir'=>$request->akhir5,'bilangan_acak_id'=>$request->n5],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b6,'terjual'=>$request->juni,'interval_awal'=>$request->awal6,'interval_akhir'=>$request->akhir6,'bilangan_acak_id'=>$request->n6],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b7,'terjual'=>$request->juli,'interval_awal'=>$request->awal7,'interval_akhir'=>$request->akhir7,'bilangan_acak_id'=>$request->n7],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b8,'terjual'=>$request->agustus,'interval_awal'=>$request->awal8,'interval_akhir'=>$request->akhir8,'bilangan_acak_id'=>$request->n8],
            ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b9,'terjual'=>$request->september,'interval_awal'=>$request->awal9,'interval_akhir'=>$request->akhir9,'bilangan_acak_id'=>$request->n9],
            // ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b10,'terjual'=>$request->oktober,'interval_awal'=>$request->awal10,'interval_akhir'=>$request->akhir10,'bilangan_acak_id'=>$request->n10],
            // ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b11,'terjual'=>$request->november,'interval_awal'=>$request->awal11,'interval_akhir'=>$request->akhir11,'bilangan_acak_id'=>$request->n11],
            // ['jenis_pupuk_id'=> $request->jenis_pupuk,'tahun'=>$request->tahun,'bulan'=>$request->b12,'terjual'=>$request->desember,'interval_awal'=>$request->awal12,'interval_akhir'=>$request->akhir12,'bilangan_acak_id'=>$request->n12],
        ];
        // dd($data);
        DB::table('data_penjualan')->insert($data);
        return redirect('dpp');
    }
}
