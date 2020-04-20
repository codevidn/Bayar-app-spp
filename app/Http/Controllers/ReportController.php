<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Carbon\Carbon;
use Session;
use App\Pembayaran;
use App\User;
use App\Siswa;

class ReportController extends Controller
{
    public function index()
    {
        $transaksi =  Pembayaran::join('siswas','siswas.id', '=','pembayarans.id_siswa')
                                ->join('users','users.id','=','pembayarans.id_petugas')
                                ->whereDate('pembayarans.updated_at', Carbon::today())
                                ->get();
        $user = User::all();
        $data = [
            'transaksi' => $transaksi,
            'user' => $user,
        ];
        return view('fitur.report.index',compact('data',$data));
    }
}
