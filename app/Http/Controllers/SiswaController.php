<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Pembayaran;
use App\Kelasr;
use App\User;
use App\Spp;
Use Carbon\Carbon;
use Session;

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
        $kelas = Kelasr::all();
        return view('fitur.siswa.create', compact('kelas'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = array(
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'id_kelas' => $request->id_kelas,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        );
        $sid = Siswa::insertGetId($row);
        $tgl = date("Y");
        $data = [
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Juli','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Agustus','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'September','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Oktober','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'November','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Desember','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Januari','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Februari','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Maret','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'April','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Mei','tahun_bayar'=>$tgl,'status'=>'0'],
            ['id_siswa'=>$sid,'bulan_dibayar'=>'Juni','tahun_bayar'=>$tgl,'status'=>'0']
        ];
        Pembayaran::insert($data);  
        $set = [
            'name' => $request->nama,
            'username' => $request->nis,
            'email' => $request->email,
            'role' => '3',
            'pin' => $sid,
            'password' => bcrypt($request->nis),
            'created_at' => Carbon::now()
        ];
        User::insert($set);    
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
        $kelas = Kelasr::all();
        $siswa = Siswa::join('kelasrs','kelasrs.id', '=', 'siswas.id_kelas')
                        ->findOrFail($id);
        $data = [
            'kelas' => $kelas,
            'siswa' => $siswa,
        ];
        return view('fitur.siswa.edit', compact('data'));  
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
        $siswa = Siswa::findOrFail($id);
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jk = $request->jk;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->no_telp = $request->no_telp;
        $siswa->alamat = $request->alamat;
        // dd($siswa);
        $siswa->save();
        return redirect()->route('siswa.index')->withSuccess(sprintf('Siswa Bernama %s Berhasil Di Ubah.', $siswa->nama));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::destroy($id);
        Pembayaran::where('id_siswa', $id)->delete();
        User::where('pin', $id)->delete();
        return redirect()->route('siswa.index') ->withSuccess(sprintf('Data Berhasil Dihapus'));
    }
}
