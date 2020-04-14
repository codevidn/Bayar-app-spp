<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Pembayaran;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('fitur.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.siswa.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->no_telp = $request->no_telp;
        $siswa->alamat = $request->alamat;
        $tgl = date("Y");
        $data = [
            ['id_siswa'=>'1','bulan_dibayar'=>'Juli','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Agustus','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'September','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Oktober','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'November','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Desember','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Januari','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Februari','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Maret','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'April','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Mei','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>'1','bulan_dibayar'=>'Juni','tahun_bayar'=>$tgl,'status'=>'0']
        ];
        Pembayaran::insert($data);        
        $siswa->save();
        return redirect()->route('siswa.index');
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
        return view('fitur.siswa.edit');  
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
