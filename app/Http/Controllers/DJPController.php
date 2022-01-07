<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DJPController extends Controller
{
    public function djp()
    {
        $data = DB::table('jenis_pupuk')->get();
        return view('data_pupuk.djp',compact('data'));
    }

    public function createdjp()
    {
        return view('data_pupuk.createdjp');
    }

    public function postcdjp(Request $request)
    {
        DB::table('jenis_pupuk')->insert([
            'nama' => $request->nama,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
        ]);
        return redirect('djp');
    }

    public function editdjp($id)
    {
        $data = DB::table('jenis_pupuk')->where('id_jenis_pupuk',$id)->get();

        return view('data_pupuk.editdjp',compact('data'));
    }

    public function postedjp(Request $request)
    {
        DB::table('jenis_pupuk')->where('id_jenis_pupuk',$request->id)->update([
            'nama' => $request->nama,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
		]);
        return redirect('djp');
    }

    public function hapusdjp($id)
    {
        DB::table('jenis_pupuk')->where('id_jenis_pupuk',$id)->delete();
		
		return redirect('djp');
    }
}
