<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Siswa;
use App\Kelasr;
use App\Pembayaran;


class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *2020-04-15 03:27:44
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuser = User::count();
        $cpetugas = User::where('role', '=', '1')->count();
        $ckelas = Kelasr::count();

        // date
        $setToday = date("Y-m-d");
        $yesterday = strtotime("yesterday");
        $lastWeek = strtotime("LAST WEEK");
        $lastMounth = strtotime("LAST MONTH");
        $lastYear = strtotime("LAST YEAR");


        $ctransaksi = Pembayaran::where('updated_at', '=', $setToday)->count();
        $riwayat = 12;

        $data = [
            'user' => $cuser,
            'petugas' => $cpetugas,
            'kelas' => $ckelas,
            'transaksi' => $ctransaksi,
            'riwayat' => $riwayat,
        ];

        return view('dashboard')->with('data',$data);
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
