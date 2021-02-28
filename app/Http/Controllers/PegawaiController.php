<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    //
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda belum login, silahkan login terlebih dahulu');
        }else{
            $pegawai = DB::table('pegawai')->get();
            return view('pegawai.index', ['pegawai' => $pegawai]);
        }
    }


    public function add()
    {
        return view('pegawai.add');
    }

    public function savePegawai(Request $r)
    {
        DB::table('pegawai')->insert([
            'nama' => $r->nama,
            'jabatan' => $r->jabatan,
            'umur' => $r->umur,
            'alamat' => $r->alamat
        ]);
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('id', $id)->get();
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }

    public function updatePegawai(Request $r)
    {
        DB::table('pegawai')->where('id', $r->id)->update([
            'nama' => $r->nama,
            'jabatan' => $r->jabatan,
            'umur' => $r->umur,
            'alamat' => $r->alamat
        ]);
        return redirect('/pegawai');
    }

    public function delete($id)
    {
        DB::table('pegawai')->where('id', $id)->delete();
        return redirect('/pegawai');
    }
}
