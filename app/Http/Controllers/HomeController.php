<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Jalur_masuk;
use App\Mahasiswa;
use App\Transaksi;
use App\Fakultas;
use App\Uploadfile;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $pendaftaran = Pendaftaran::get();
        $mahasiswa   = Mahasiswa::get();
        $fakultas = Fakultas::get();
        $jalurmasuk = Jalur_masuk::get();
        $uploadfile = Uploadfile::get();
       
        if(Auth::user()->level == 'user')
        {
            $datas = Mahasiswa::where('pendaftaran_id', Auth::user()->pendaftaran->id)
                                ->get();
        } else {
            $datas = Mahasiswa::get();
        }
        return view('home', compact('pendaftaran', 'mahasiswa','fakultas' ,'datas','jalurmasuk','uploadfile'));
    }
    
}
