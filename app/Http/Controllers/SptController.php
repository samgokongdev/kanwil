<?php

namespace App\Http\Controllers;

use App\Models\Pengawasanspt;
use Illuminate\Http\Request;

class SptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spt = Pengawasanspt::where('status', '=', "BELUM ADA TINDAKAN PEMERIKSAAN")
            ->OrderBy('tgl_jt_rik', 'asc')
            ->get();
        $title = 'Daftar SPT Belum Ada Tindakan Pemeriksaan';
        $desc = 'Daftar ini berisi Seluruh SPT Yang Belum Ada Tindakan Pemeriksaan';
        return view('spt', compact('title', 'desc', 'spt'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function semuaspt()
    {
        $spt = Pengawasanspt::OrderBy('tgl_jt_rik', 'asc')
            ->get();
        $title = 'Daftar SPT LB Restitusi Masuk Setahun Terakhir';
        $desc = 'Daftar ini berisi Seluruh SPT LB Restitusi Yang Masuk Setahun Terakhir Beserta Status Pemeriksaannya';
        return view('spt', compact('title', 'desc', 'spt'));
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
        $dataspt = Pengawasanspt::where('id_spt','=',$id)->first();

        return view('detailspt',compact('dataspt'));
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
