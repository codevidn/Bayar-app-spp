<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Carbon\Carbon;
Use App\User;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = User::where('role','=',2)->get();
        // dd($petugas);
        return view('fitur.petugas.index',compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $set = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => '2',
            'pin' => 'null',
            'password' => bcrypt($request->password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        User::insert($set);    

        return redirect()->route('petugas.index')->withSuccess(sprintf('Petugas Bernama %s Berhasil Di Tambahkan', $request->name));
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
        $petugas = User::findOrFail($id);
        return view('fitur.petugas.edit',compact('petugas'));
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
        $petugas = User::findOrFail($id);
        $petugas->name = $request->name;
        $petugas->username = $request->username;
        $petugas->email = $request->email;
        $petugas->role = '2' ;
        $petugas->pin = 'null';
        $petugas->created_at = Carbon::now();
        $petugas->updated_at = Carbon::now();
        $petugas->save();

        return redirect()->route('petugas.index')->withSuccess(sprintf('Petugas Bernama %s Berhasil Di Ubah.', $request->name));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('petugas.index') ->withSuccess(sprintf('Data Berhasil Dihapus'));
    }

    
}
