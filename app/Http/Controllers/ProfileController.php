<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pembayaran;
use App\Siswa;
use App\Kelasr;
use App\Spp;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user();
        $siswa = Siswa::findOrFail($auth->pin);
        $transaksi = Pembayaran::where('id_siswa', $auth->pin)->paginate(12);
        $kelas = Kelasr::where('id', $siswa->id_kelas)->get(); 
        $tahun = date("Y");
        // dd($transaksi);
        $spp = Spp::where('tahun', $tahun)->get();

        $row = [
            'siswa' => $siswa,
            'transaksi' => $transaksi,
            'kelas' => $kelas,
            'spp' => $spp
        ];
        return view('fitur.profile.index',compact('row'));  
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
