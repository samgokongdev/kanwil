<?php

namespace App\Http\Controllers;

use App\Models\Tunggakan;
use Illuminate\Http\Request;

class TunggakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")->get();
        $title = 'Daftar Tunggakan Pemeriksaan Outstanding';
        $desc = 'Daftar ini berisi Seluruh daftar pemeriksaan yang telah terbit SP2. Termasuk SP2 yang belum input SPPL';
        return view('tunggakan', compact('title', 'desc', 'tunggakan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sp2belumsppl()
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")->where('tgl_sppl', '=', "0000-00-00")->get();
        $title = 'Daftar Tunggakan Pemeriksaan Belum Input SPPL';
        $desc = 'Daftar ini berisi Seluruh daftar pemeriksaan yang telah terbit SP2 namum belum input SPPL';
        return view('tunggakan', compact('title', 'desc', 'tunggakan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function np2belumsp2()
    {
        $tunggakan = Tunggakan::where('sp2', '=', "")->get();
        $title = 'Daftar NP2 Belum Terbit SP2';
        $desc = 'Daftar ini berisi Seluruh daftar pemeriksaan yang telah terbit NP2 namum belum terbit SP2';
        return view('tunggakan', compact('title', 'desc', 'tunggakan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sp2jtbulanini()
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->whereMonth('jt_daluarsa', date('m'))
            ->whereYear('jt_daluarsa', date('Y'))
            ->get();
        $title = 'Daftar SP2 Jatuh Tempo / Daluarsa Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan belum selesai yang Jatuh Tempo Bulan Ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sp2permdokbulanini()
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->whereMonth('max_perm_dok', date('m'))
            ->whereYear('max_perm_dok', date('Y'))
            ->get();
        $title = 'Daftar SP2 Target Selesai Permintaan Dukumen Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan yang seharusnya tahapan permintaan dokumennya telah selesai bulan ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sp2sphpbulanini()
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->whereMonth('max_sphp', date('m'))
            ->whereYear('max_sphp', date('Y'))
            ->get();
        $title = 'Daftar SP2 Target Selesai SPHP Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan yang seharusnya telah selesai Pengujian/SPHP bulan ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sp2lhpbulanini()
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->whereMonth('max_lhp', date('m'))
            ->whereYear('max_lhp', date('Y'))
            ->get();
        $title = 'Daftar SP2 Target Selesai SPHP Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan yang seharusnya telah selesai Pengujian/SPHP bulan ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan'));
    }

    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sp2a($id)
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->where('up2', '=', $id)
            ->orderBy('max_lhp', 'asc')
            ->get();
        $kpp = $id;
        $title = 'Daftar Tunggakan Pemeriksaan Outstanding';
        $desc = 'Daftar ini berisi Seluruh daftar pemeriksaan yang telah terbit SP2. Termasuk SP2 yang belum input SPPL';
        return view('tunggakan', compact('title', 'desc', 'tunggakan', 'kpp'));
    }


    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sp2b($id)
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->where('up2', '=', $id)
            ->whereMonth('max_perm_dok', date('m'))
            ->whereYear('max_perm_dok', date('Y'))
            ->orderBy('max_lhp', 'asc')
            ->get();
        $kpp = $id;
        $title = 'Daftar SP2 Target Selesai Permintaan Dukumen Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan yang seharusnya tahapan permintaan dokumennya telah selesai bulan ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan', 'kpp'));
    }

    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sp2c($id)
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->where('up2', '=', $id)
            ->whereMonth('max_pengujian_1', date('m'))
            ->whereYear('max_pengujian_1', date('Y'))
            ->orderBy('max_lhp', 'asc')
            ->get();
        $kpp = $id;
        $title = 'Daftar SP2 Target Selesai Tahapan Pengujian 1 Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan yang tahapan pengujian 1 telah selesai bulan ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan', 'kpp'));
    }

    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sp2d($id)
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->where('up2', '=', $id)
            ->whereMonth('max_pengujian_2', date('m'))
            ->whereYear('max_pengujian_2', date('Y'))
            ->orderBy('max_lhp', 'asc')
            ->get();
        $kpp = $id;
        $title = 'Daftar SP2 Target Selesai Tahapan Pengujian 2 (SPHP) Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan yang seharusnya telah selesai pengujian (Sudah SPHP) bulan ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan', 'kpp'));
    }

    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sp2e($id)
    {
        $tunggakan = Tunggakan::where('sp2', '!=', "")
            ->where('up2', '=', $id)
            ->whereMonth('max_lhp', date('m'))
            ->whereYear('max_lhp', date('Y'))
            ->orderBy('max_lhp', 'asc')
            ->get();
        $kpp = $id;
        $title = 'Daftar SP2 Target Selesai LHP Bulan Ini';
        $desc = 'Daftar ini berisi seluruh pemeriksaan yang seharusnya telah terbit LHP bulan ini';
        return view('tunggakan', compact('title', 'desc', 'tunggakan', 'kpp'));
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
