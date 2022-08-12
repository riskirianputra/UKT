<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Mahasiswa;
use App\Mahasiswa_entry;
use App\Pendaftaran;
use App\Uploadfile;
use App\Konfirmasi;
use App\Jalur_masuk;
use DB;

class KonfirmasiController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {        
        if(Auth::user()->hasrole('Mahasiswa'))
        {
            $pendaftaran = Pendaftaran::where('user_id', Auth::id())->get();
            $mahasiswa = Mahasiswa::where('user_id', Auth::id())->get();
            $upload_file = Uploadfile::where('user_id', Auth::id())->get();
            $mahasiswa_entry = Mahasiswa_entry::where('user_id', Auth::id())->get();                    
        
            return view('konfirmasi.index',compact('pendaftaran','mahasiswa','upload_file','mahasiswa_entry'));
        }
    }

    // submit form konfirmasi
    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::findOrFail($request->mahasiswa_id);

        $bobot = $mahasiswa->bobot()->create([
            'bobot' => $mahasiswa->getBobotMahasiswa(),
            'level' => $mahasiswa->getLevelMahasiswa(),
        ]);

        return redirect()->action('BobotController@show', ['id' => $bobot]);
    }
}
