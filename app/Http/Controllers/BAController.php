<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BAController extends Controller
{
    public function ba()
    {
        return view('perhitungan.ba');
    }

    public function hitungba(Request $request)
    {
        if ($request->has('hitung')) {
            $k = $request->k;
            $g = $request->g;
            $z = $request->z;
            $m = $request->m;
        }

        $hasil1 = ($k*$z+$g) % $m;
        $hasil2 = ($k*$hasil1+$g) % $m;
        $hasil3 = ($k*$hasil2+$g) % $m;
        $hasil4 = ($k*$hasil3+$g) % $m;
        $hasil5 = ($k*$hasil4+$g) % $m;
        $hasil6 = ($k*$hasil5+$g) % $m;
        $hasil7 = ($k*$hasil6+$g) % $m;
        $hasil8 = ($k*$hasil7+$g) % $m;
        $hasil9 = ($k*$hasil8+$g) % $m;
        $hasil10 = ($k*$hasil9+$g) % $m;
        $hasil11 = ($k*$hasil10+$g) % $m;
        $hasil12 = ($k*$hasil11+$g) % $m;
        
        return view('perhitungan.hitungba',compact('hasil1','hasil2','hasil3','hasil4','hasil5','hasil6','hasil7','hasil8','hasil9','hasil10','hasil11','hasil12'));
    }

    public function simpanba(Request $request)
    {
        // if ($request->has('button')){
        //     DB::table('bilangan_acak')->truncate();
        // }

        $data = [
            ['nilai' => $request->hasil1],
            ['nilai' => $request->hasil2],
            ['nilai' => $request->hasil3],
            ['nilai' => $request->hasil4],
            ['nilai' => $request->hasil5],
            ['nilai' => $request->hasil6],
            ['nilai' => $request->hasil7],
            ['nilai' => $request->hasil8],
            ['nilai' => $request->hasil9],
            ['nilai' => $request->hasil10],
            ['nilai' => $request->hasil11],
            ['nilai' => $request->hasil12],
        ];

        // dd($data);
        DB::table('bilangan_acak')->insert($data);

        return redirect('/ba')-with('notif','Hasil Perhitungan Bilangan Acak Telah Di Simpan');
    }
}
