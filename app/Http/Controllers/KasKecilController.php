<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KasKecil;

class KasKecilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaskecil = DB::select("SELECT no, tanggal, keterangan, FORMAT(debit, 2, 'de_DE') as debit, FORMAT(kredit, 2, 'de_DE') as kredit, FORMAT(SUM(ifnull(kredit, 0) - ifnull(debit, 0)) OVER (ORDER BY no ROWS BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW), 2, 'de_DE') as saldo FROM kas_kecil order by tanggal desc");
        return view('home', ['content' => view('pages/akuntansi/v_kas_kecil', ['data_kas_kecil' => $kaskecil]), 'title' => 'Buku Kas']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
