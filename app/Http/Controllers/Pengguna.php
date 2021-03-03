<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Pengguna extends Controller
{
    public function index()
    {
        $response = Http::get('https://dekontaminasi.com/api/id/covid19/hospitals');
        $data = $response->json();
        return view('pengguna.index', compact('data'));
    }
}
