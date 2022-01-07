<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HPController extends Controller
{
    public function hp (Request $request)
    {
        
        // dd($request->thn,$request->jp);

        if($request->has('jp')){
            $hp = DB::table('data_penjualan')
            ->select('data_penjualan.bulan','data_penjualan.terjual','bilangan_acak.nilai', 'data_penjualan.interval_awal', 'data_penjualan.interval_akhir')
            ->join('bilangan_acak','data_penjualan.bilangan_acak_id', '=', 'bilangan_acak.id_bilangan_acak')
            ->where('tahun', '=', $request->thn)
            ->where('jenis_pupuk_id', '=', $request->jp)
            ->get();
            
        }else{
            $hp = DB::table('data_penjualan')
            ->select('data_penjualan.bulan','data_penjualan.terjual','bilangan_acak.nilai', 'data_penjualan.interval_awal', 'data_penjualan.interval_akhir')
            ->join('bilangan_acak','data_penjualan.bilangan_acak_id', '=', 'bilangan_acak.id_bilangan_acak')
            ->get();
        }

        return view('hasil_prediksi.hp',compact('hp'));
    }
}
