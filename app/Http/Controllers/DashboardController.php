<?php

namespace App\Http\Controllers;

use App\Models\Spt052clean;
use App\Models\Spt053clean;
use App\Models\Spt054clean;
use App\Models\Spt055clean;
use App\Models\Spt056clean;
use App\Models\Spt057clean;
use App\Models\Spt058clean;
use App\Models\Spt059clean;
use App\Models\Spt081clean;

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
        //variabel sp2 outstanding
        $sp2a130 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '130')->count();
        $sp2a052 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '052')->count();
        $sp2a053 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '053')->count();
        $sp2a054 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '054')->count();
        $sp2a055 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '055')->count();
        $sp2a056 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '056')->count();
        $sp2a057 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '057')->count();
        $sp2a058 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '058')->count();
        $sp2a059 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '059')->count();
        $sp2a081 = Tunggakan::where('sp2', '!=', '')->where('up2', '=', '081')->count();

        //variabel sp2 target permdok bulan ini (kodeb)
        $sp2b130 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '130')->count();
        $sp2b052 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '052')->count();
        $sp2b053 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '053')->count();
        $sp2b054 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '054')->count();
        $sp2b055 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '055')->count();
        $sp2b056 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '056')->count();
        $sp2b057 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '057')->count();
        $sp2b058 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '058')->count();
        $sp2b059 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '059')->count();
        $sp2b081 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_perm_dok', date('m'))->whereYear('max_perm_dok', date('Y'))->where('up2', '=', '081')->count();

        //variabel sp2 target pengujian tahap 1 bulan ini
        $sp2c130 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '130')->count();
        $sp2c052 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '052')->count();
        $sp2c053 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '053')->count();
        $sp2c054 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '054')->count();
        $sp2c055 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '055')->count();
        $sp2c056 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '056')->count();
        $sp2c057 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '057')->count();
        $sp2c058 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '058')->count();
        $sp2c059 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '059')->count();
        $sp2c081 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_1', date('m'))->whereYear('max_pengujian_1', date('Y'))->where('up2', '=', '081')->count();

        //variabel sp2 target pengujian tahap 2 bulan ini
        $sp2d130 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '130')->count();
        $sp2d052 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '052')->count();
        $sp2d053 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '053')->count();
        $sp2d054 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '054')->count();
        $sp2d055 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '055')->count();
        $sp2d056 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '056')->count();
        $sp2d057 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '057')->count();
        $sp2d058 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '058')->count();
        $sp2d059 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '059')->count();
        $sp2d081 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_pengujian_2', date('m'))->whereYear('max_pengujian_2', date('Y'))->where('up2', '=', '081')->count();

        //variabel sp2 target pengujian tahap 2 bulan ini
        $sp2e130 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '130')->count();
        $sp2e052 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '052')->count();
        $sp2e053 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '053')->count();
        $sp2e054 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '054')->count();
        $sp2e055 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '055')->count();
        $sp2e056 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '056')->count();
        $sp2e057 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '057')->count();
        $sp2e058 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '058')->count();
        $sp2e059 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '059')->count();
        $sp2e081 = Tunggakan::where('sp2', '!=', '')->whereMonth('max_lhp', date('m'))->whereYear('max_lhp', date('Y'))->where('up2', '=', '081')->count();

        //variabel spt belum tindakan pemeriksaan
        $spta052 = Spt052clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta053 = Spt053clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta054 = Spt054clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta055 = Spt055clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta056 = Spt056clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta057 = Spt057clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta058 = Spt058clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta059 = Spt059clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();
        $spta081 = Spt081clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->count();

        //variabel spt belum tindakan pemeriksaan target sp2 bulan ini
        $sptb052 = Spt052clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb053 = Spt053clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb054 = Spt054clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb055 = Spt055clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb056 = Spt056clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb057 = Spt057clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb058 = Spt058clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb059 = Spt059clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();
        $sptb081 = Spt081clean::where('status', '=', 'BELUM ADA TINDAKAN PEMERIKSAAN')->whereMonth('max_sp2', date('m'))->whereYear('max_sp2', date('Y'))->count();

        return view('dashboard', compact(
            'sp2a130',
            'sp2a052',
            'sp2a053',
            'sp2a054',
            'sp2a055',
            'sp2a056',
            'sp2a057',
            'sp2a058',
            'sp2a059',
            'sp2a081',
            'sp2b130',
            'sp2b052',
            'sp2b053',
            'sp2b054',
            'sp2b055',
            'sp2b056',
            'sp2b057',
            'sp2b058',
            'sp2b059',
            'sp2b081',
            'sp2c130',
            'sp2c052',
            'sp2c053',
            'sp2c054',
            'sp2c055',
            'sp2c056',
            'sp2c057',
            'sp2c058',
            'sp2c059',
            'sp2c081',
            'sp2d130',
            'sp2d052',
            'sp2d053',
            'sp2d054',
            'sp2d055',
            'sp2d056',
            'sp2d057',
            'sp2d058',
            'sp2d059',
            'sp2d081',
            'sp2e130',
            'sp2e052',
            'sp2e053',
            'sp2e054',
            'sp2e055',
            'sp2e056',
            'sp2e057',
            'sp2e058',
            'sp2e059',
            'sp2e081',
            'spta052',
            'spta053',
            'spta054',
            'spta055',
            'spta056',
            'spta057',
            'spta058',
            'spta059',
            'spta081',
            'sptb052',
            'sptb053',
            'sptb054',
            'sptb055',
            'sptb056',
            'sptb057',
            'sptb058',
            'sptb059',
            'sptb081'
        ));
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
