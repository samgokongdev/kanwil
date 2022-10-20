<?php

namespace App\Http\Controllers;

use App\Models\Pengawasanspt;
use App\Models\Spt052clean;
use App\Models\Spt053clean;
use App\Models\Spt054clean;
use App\Models\Spt055clean;
use App\Models\Spt056clean;
use App\Models\Spt057clean;
use App\Models\Spt058clean;
use App\Models\Spt059clean;
use App\Models\Spt081clean;
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
        $dataspt = Pengawasanspt::where('id_spt', '=', $id)->first();

        return view('detailspt', compact('dataspt'));
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
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function spta($id)
    {
        $kpp = $id;

        if ($kpp === "052") {
            $spt = Spt052clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "053") {
            $spt = Spt053clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "054") {
            $spt = Spt054clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "055") {
            $spt = Spt055clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "056") {
            $spt = Spt056clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "057") {
            $spt = Spt057clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "058") {
            $spt = Spt058clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "059") {
            $spt = Spt059clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "081") {
            $spt = Spt081clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->orderby('tgl_terima', 'desc')->get();
        }

        // dd($spt);
        $title = 'Daftar SPT LB Restitusi Masuk Setahun Terakhir Belum ada Tindakan Pemeriksaan';
        $desc = 'Daftar ini berisi Seluruh SPT LB Restitusi Yang Masuk Setahun Terakhir Beserta Status Pemeriksaannya';
        return view('spt', compact('title', 'desc', 'spt', 'kpp'));
    }

    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sptb($id)
    {
        $kpp = $id;

        if ($kpp === "052") {
            $spt = Spt052clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "053") {
            $spt = Spt053clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "054") {
            $spt = Spt054clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "055") {
            $spt = Spt055clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "056") {
            $spt = Spt056clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "057") {
            $spt = Spt057clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "058") {
            $spt = Spt058clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "059") {
            $spt = Spt059clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        } elseif ($kpp === "081") {
            $spt = Spt081clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->orderby('tgl_terima', 'desc')->get();
        }

        // dd($spt);
        $title = 'Daftar SPT LB Restitusi Masuk Setahun Terakhir, Belum ada Tindakan Pemeriksaan, dan Target SP2 Bulan Ini ';
        $desc = 'Daftar ini berisi Seluruh SPT LB Restitusi Yang Masuk Setahun Terakhir Beserta Status Pemeriksaannya';
        return view('spt', compact('title', 'desc', 'spt', 'kpp'));
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
