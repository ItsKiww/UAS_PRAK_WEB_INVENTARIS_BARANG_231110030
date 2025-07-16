<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akunInventaris;

class akunInventarisController extends Controller
{
    public function daftarPage() {
        return view('inventaris.login.daftar');
    }

    public function dashboard() {
        return view('inventaris.dashbord');
    }

    public function daftarPost(Request $req) {
        $data = $req->all();
        $akun = new akunInventaris();
        $akun->username = $data['username'];
        $akun->pass = $data['pass'];
        $akun->nama = $data['nama'];
        $akun->email = $data['email'];
        $akun->kontak = $data['kontak'];
        $akun->save();

        return redirect('/');
    }

    public function masukPost(Request $req) {
        try {
            $data = $req->all();
            $o = akunInventaris::where('username', $data['username'])->where('pass', $data['pass'])->firstOrFail();
            return redirect('/dashboard');
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }
}
