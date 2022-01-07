<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/dashboard');
        }
        return redirect('/')->with('notif','Account not found!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function db()
    {
        $c1 = DB::table('jenis_pupuk')->count(); 
        $c2 = DB::table('data_penjualan')->count();
        $c3 = DB::table('data_penjualan')->count();
        return view('dashboard',compact('c1','c2','c3'));
    }

}
