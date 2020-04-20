<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;
use App\Pembayaran;
use App\Siswa;
use App\Kelasr;
use Redirect;
use App\Spp;
use Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->get('cari');
        $siswa = Siswa::where('nis', $cari)->paginate(1);
        return view('fitur.transaksi.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
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
        $siswa = Siswa::findOrFail($id);
        $transaksi = Pembayaran::where('id_siswa', $id)->paginate(12);
        $kelas = Kelasr::where('id', $siswa->id_kelas)->get(); 
        $tahun = date("Y");

        $spp = Spp::where('tahun', $tahun)->get();

        $row = [
            'siswa' => $siswa,
            'transaksi' => $transaksi,
            'kelas' => $kelas,
            'spp' => $spp
        ];
        return view('fitur.transaksi.profile', compact('row'));
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
    public function update(Request $request,$id)
    {
        $transaksi = Pembayaran::findOrFail($id);
        $transaksi->status = "1";
        $transaksi->tgl_bayar =  date('Y-m-d');
        $transaksi->id_petugas = Auth::user()->id;
        $transaksi->save();
        return Redirect::back()->withSuccess(sprintf('SPP Untuk Bulan %s Berhasil Dibayar.', $transaksi->bulan_dibayar));

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
    
    public function batalkan($id)
    {
        $transaksi = Pembayaran::findOrFail($id);
        $transaksi->status = "0";
        $transaksi->save();
        return Redirect::back()->withSuccess(sprintf('Pembayaran SPP Untuk Bulan %s Berhasil Dibatalkan !!! :).', $transaksi->bulan_dibayar));
    }
}
