<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahasiswa;
use App\Mahasiswa_entry;
use App\Pendaftaran;
use App\Uploadfile;
use App\Jalur_masuk;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {        
         
            if(Auth::user()->hasrole('Mahasiswa'))
        {   
            $users = Auth::User()->id;
            $datas = Mahasiswa::where('user_id', $users)->get();
            $pendaftaran = Pendaftaran::where('user_id', Auth::id())->get();
            $mahasiswa = Mahasiswa::where('user_id', Auth::id())->get();
            $upload_file = Uploadfile::where('user_id', Auth::id())->get();
            $mahasiswa_entry = Mahasiswa_entry::where('user_id', Auth::id())->get();                    
                                                              
        } else {
            $datas = Mahasiswa::all();
            $users = User::all();
            $pendaftaran = Pendaftaran::all();
            $mahasiswa = Mahasiswa::all();
        }       

         return view('mahasiswa.index', compact('datas','users','pendaftaran','mahasiswa','upload_file','mahasiswa_entry')); 
    }
   
    public function create()
    {    

        if(Auth::user()->hasrole('Mahasiswa'))
        {   
            $datas = Pendaftaran::where('user_id', Auth::id())->get();
            $pendaftaran = Pendaftaran::where('user_id', Auth::id())->get();
                   
        } else {
            $datas = Pendaftaran::all();
            $pendaftaran = Pendaftaran::all();
            $data = Pendaftaran::all();
          
        } 
        $users = User::WhereNotExists(function($query) {
                        $query->select(DB::raw(1))
                        ->from('mahasiswa')
                        ->whereRaw('mahasiswa.user_id = users.id');
                     })->get();
                       
        $jalurmasuk = Jalur_masuk::get();
        // $m=Mahasiswa::all();

        // if($m!==0){  
        //             echo '<h3> <table  border="0" cellpadding="10" cellspacing="2" align="center" class="outer" >
        //                 <!--DWLayoutTable-->
        //                 <tr><td width="300">Anda sudah mengisikan Data.</td></tr>
        //                 <tr><td>Pengisian Data hanya diizinkan satu kali.</td></tr>
        //                 <tr><td>Jika belum validasi data, silakan pilih </td></tr>
        //                 <tr><td>Jika sudah validasi data, silakan ke </td></tr>
        //                 </table></h3>';
        //         }
        // else
        //         {                   
        //         }

         return view('mahasiswa.create', compact('pendaftaran','jalurmasuk','users','data'));
       
    }
   
    public function store(Request $request)
    {

       

        $mahasiswa = Mahasiswa::create([
        
        'user_id' => Auth::user()->id,              
        'pendaftaran_id' => $request->get('pendaftaran_id'),                
        'idJalur' => $request->get('idJalur'),             
        'nama' => $request->get('nama'),
        'nisn' => $request->get('nisn'),     
        'alamat'=>$request->get('alamat'),
        'namaAyah'=>$request->get('namaAyah'),       
        'pekerjaanAyah'=>$request->get('pekerjaanAyah'),
        'penghasilanAyah'=>$request->get('penghasilanAyah'),
        'namaIbu'=>$request->get('namaIbu'),        
        'pekerjaanIbu'=>$request->get('pekerjaanIbu'),
        'penghasilanIbu'=>$request->get('penghasilanIbu'),
        'pangan'=>$request->get('pangan'),
        'non_pangan'=>$request->get('non_pangan'),       
        'penghasilan_ortu'=>$request->get('penghasilan_ortu'), 
        'jumlah_tanggungan'=>$request->get('jumlah_tanggungan'),
        'kepemilikan_rumah'=>$request->get('kepemilikan_rumah'),
        'luas_bangunan'=>$request->get('luas_bangunan'),
        'alat_transportasi'=>$request->get('alat_transportasi'),
        'daya_listrik'=>$request->get('daya_listrik'),       
        'bidikMisi'=>$request->get('bidikMisi'),
        'jk'=>$request->get('jk'),
        'tgl_lahir'=>$request->get('tgl_lahir'),
        'tempat_lahir'=>$request->get('tempat_lahir'),
        'agama'=>$request->get('agama'),           
        'telepon'=>$request->get('telepon'),
                                  
            ]);

         $this->validate($request, [
            'pangan' => 'required|min:5',
            'non_pangan' => 'required',
            'penghasilan_ortu' => 'required',
            'jumlah_tanggungan' => 'required',
            'kepemilikan_rumah' => 'required',
            'luas_bangunan' => 'required',
            'alat_transportasi' => 'required',
            'daya_listrik' => 'required',
        ]);

        return redirect()->route('konfirmasi.index');
    }
   
    public function show($id)
    {
        
        $data = Mahasiswa::findOrFail($id);

        return view('mahasiswa.show', compact('data')); 
    }

    
    public function edit($id)
    {
          
        $data = Mahasiswa::findOrFail($id);
        $pendaftaran = Pendaftaran::get();
        $users = User::get();
        $jalurmasuk = Jalur_masuk::get();
        return view('mahasiswa.edit', compact('data', 'pendaftaran','jalurmasuk'));
    }

   
    public function update(Request $request, $id)
    {      
        
         Mahasiswa::find($id)->update($request->all());

       
        return redirect()->to('konfirmasi');
    }
   
    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        
        return redirect()->route('mahasiswa.index');
    }
}
