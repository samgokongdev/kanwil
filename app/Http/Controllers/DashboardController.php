<?php

namespace App\Http\Controllers;

use App\Models\Pengawasanspt;
use App\Models\Tunggakan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //data sp2
        $sp2outstanding = Tunggakan::where('sp2', '!=', "")->count();
        $sp2belumsppl = Tunggakan::where('sp2', '!=', "")->where('tgl_sppl', '=', "0000-00-00")->count();
        $np2belumsp2 = Tunggakan::where('sp2', '=', "")->count();
        $sp2jtbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('jt_daluarsa', date('m'))->whereYear('jt_daluarsa', date('Y'))->count();
        $sp2permdokbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->count();
        $sp2sphpbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('max_sphp', date('m'))->whereYear('max_sphp', date('Y'))->count();
        $sp2lhpbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->count();

        //data spt
        $spt_belum_pemeriksaan = Pengawasanspt::where('status', '=', "BELUM ADA TINDAKAN PEMERIKSAAN")
            ->OrderBy('tgl_jt_rik', 'asc')
            ->count();
        $spt_belum_pemeriksaan_badan = Pengawasanspt::where('status', '=', "BELUM ADA TINDAKAN PEMERIKSAAN")
            ->where('kode_alias','TAHUNAN')
            ->OrderBy('tgl_jt_rik', 'asc')
            ->count();
        $spt_belum_pemeriksaan_ppn = Pengawasanspt::where('status', '=', "BELUM ADA TINDAKAN PEMERIKSAAN")
            ->where('kode_alias','PPN')
            ->OrderBy('tgl_jt_rik', 'asc')
            ->count();
        $spt_lb_res = Pengawasanspt::count();
        $spt_lb_res_badan = Pengawasanspt::where('kode_alias','TAHUNAN')->count();
        $spt_lb_res_ppn = Pengawasanspt::where('kode_alias','PPN')->count();

        return view('dashboard', compact('spt_lb_res_badan','spt_lb_res_ppn','spt_belum_pemeriksaan_ppn','spt_belum_pemeriksaan_badan','sp2outstanding', 'sp2belumsppl', 'np2belumsp2', 'sp2jtbulanini', 'sp2permdokbulanini', 'sp2sphpbulanini', 'sp2lhpbulanini','spt_belum_pemeriksaan','spt_lb_res'));
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
