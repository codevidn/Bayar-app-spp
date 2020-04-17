<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        return view('help.index');
    }
    public function login()
    {
        return view('help.pages.login');
    }
    public function dsiswa()
    {
        return view('help.pages.datasiswa');
    }
    public function dkelas()
    {
        return view('help.pages.datakelas');
    }
    public function report()
    {
        return view('help.pages.report');
    }
    public function tran()
    {
        return view('help.pages.transaksi');
    }
}
