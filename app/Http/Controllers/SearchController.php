<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SearchController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $cari = $request->get('cari');
        $siswa = Siswa::where('nis', $cari)->paginate(1);
        return view('fitur.transaksi.index', compact('siswa'));
    }

}
