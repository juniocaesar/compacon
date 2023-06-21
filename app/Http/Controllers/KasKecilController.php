<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasKecil;

class KasKecilController extends Controller
{
    //
    public function index()
    {
        $kaskecil = KasKecil::all();
        return view('home', ['content' => view('pages/akuntansi/v_buku_kas', ['data_kas_kecil' => $kaskecil]), 'title' => 'Buku Kas']);
    }
}
