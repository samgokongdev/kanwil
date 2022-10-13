<?php

namespace App\Http\Controllers;

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
        $sp2outstanding = Tunggakan::where('sp2', '!=', "")->count();
        $sp2belumsppl = Tunggakan::where('sp2', '!=', "")->where('tgl_sppl', '=', "0000-00-00")->count();
        $np2belumsp2 = Tunggakan::where('sp2', '=', "")->count();
        $sp2jtbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('jt_daluarsa', date('m'))->whereYear('jt_daluarsa', date('Y'))->count();
        $sp2permdokbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->count();
        $sp2sphpbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('max_sphp', date('m'))->whereYear('max_sphp', date('Y'))->count();
        $sp2lhpbulanini = Tunggakan::where('sp2', '!=', "")->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->count();
        return view('dashboard', compact('sp2outstanding', 'sp2belumsppl', 'np2belumsp2', 'sp2jtbulanini', 'sp2permdokbulanini', 'sp2sphpbulanini', 'sp2lhpbulanini',));
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
