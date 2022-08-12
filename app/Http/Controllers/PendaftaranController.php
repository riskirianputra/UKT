<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PendaftaranExport;
use App\Imports\PendaftaranImport;
use App\Imports\PendaftaranImportSbmptn;
use App\User;
use App\Mahasiswa;
use App\Pendaftaran;
use App\Jalur_masuk;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class PendaftaranController extends Controller
{
   
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {   
        

         if(Auth::user()->hasrole('Mahasiswa'))
        {   
            $users = Auth::User()->id;
            $datas = Pendaftaran::where('user_id', $users)->get();
            $pendaftaran = Pendaftaran::where('user_id', Auth::id())->get();                  
                              
        } else {
            $datas = Pendaftaran::all();
            $users = User::all();
            $pendaftaran = Pendaftaran::all(); 
        }

        $data = Pendaftaran::all();
        $user = User::get();
        $jalur_masuk = Jalur_masuk::get();
           
        return view('pendaftaran.index', compact('datas','users','data','user','jalur_masuk','pendaftaran'));
    }

   
    public function create()
    {
       $users = User::WhereNotExists(function($query) {
                        $query->select(DB::raw(1))
                        ->from('pendaftaran')
                        ->whereRaw('pendaftaran.user_id = users.id');
                     })->get();;                
        $mahasiswas = Mahasiswa::get();
        $jalur_masuk = Jalur_masuk::get();
        return view('pendaftaran.create', compact( 'mahasiswas','jalur_masuk','users'));
    }

   
    public function store(Request $request)
    {
        
        $pendaftaran = Pendaftaran::create([
                
        'user_id' => $request->get('user_id'),              
        'idJalur' => $request->get('idJalur'),
        'noPendaftaran' => $request->get('noPendaftaran'),        
        'angkatan' => $request->get('angkatan'),              
        'ptnke' => $request->get('ptnke'),      
        'namaPeserta'=>$request->get('namaPeserta'),        
        'kodeProdi'=>$request->get('kodeProdi'),
        'namaProdi'=>$request->get('namaProdi'),
        'bidikMisi'=>$request->get('bidikMisi'),
        'alamat'=>$request->get('alamat'),
        'alamatKab'=>$request->get('alamatKab'),
        'alamatProv'=>$request->get('alamatProv'),
        'jeniskelamin'=>$request->get('jeniskelamin'),
        'tanggalLahir'=>$request->get('tanggalLahir'),
        'tempatLahir'=>$request->get('tempatLahir'),
        'agama'=>$request->get('agama'),
        'kewarganegaraan' => $request->get('kewarganegaraan'),   
        'telepon'=>$request->get('telepon'),
        'nik' => $request->get('nik'),
        'nisn' => $request->get('nisn'),
        'email' => $request->get('email'),
        'namaAyah'=>$request->get('namaAyah'),
        'pendidikanAyah'=>$request->get('pendidikanAyah'),
        'pekerjaanAyah'=>$request->get('pekerjaanAyah'),
        'penghasilanAyah'=>$request->get('penghasilanAyah'),
        'namaIbu'=>$request->get('namaIbu'),
        'pendidikanIbu'=>$request->get('pendidikanIbu'),
        'pekerjaanIbu'=>$request->get('pekerjaanIbu'),
        'penghasilanIbu'=>$request->get('penghasilanIbu'),
        'jumlahkakak'=>$request->get('jumlahkakak'),
        'jumlahadik'=>$request->get('jumlahadik'),        
        'npsn'=>$request->get('npsn'),
        'namaSekolah'=>$request->get('namaSekolah'),
        'kabSekolah'=>$request->get('kabSekolah'),
        'provSekolah'=>$request->get('provSekolah'),
        'tahunLulus'=>$request->get('tahunLulus'),
        'sppSekolah'=>$request->get('sppSekolah'),
        'sppSekolahdibayar'=>$request->get('sppSekolahdibayar'),
        'uangPembangunan'=>$request->get('uangPembangunan'),
        'uangPembangunandibayar'=>$request->get('uangPembangunandibayar'),
            
        ]);

        
        return redirect()->route('pendaftaran.index');

    }

    
    public function show($id)
    {
        $jalur_masuk = Jalur_masuk::get();
        $data = Pendaftaran::findOrFail($id);        
        return view('pendaftaran.show', compact('data','jalur_masuk')); 
    }

   
    public function edit($id)
    {
        $data = Pendaftaran::findOrFail($id);
        $users = User::get();
        $jalur_masuk = Jalur_masuk::get();
        return view('pendaftaran.edit', compact('data', 'users','jalur_masuk'));
    }

  
    public function update(Request $request, $id)
    {
       Pendaftaran::find($id)->update($request->all());

       
        return redirect()->to('pendaftaran');
    }

  
    public function destroy($id)
    {
        Pendaftaran::find($id)->delete();
        
        return redirect()->route('pendaftaran.index');
    }

    public function export_excel()
    {
        return Excel::download(new PendaftaranExport, 'pendaftaran.xlsx');
    }

  public function import_excel(Request $request) 
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_pendaftaran',$nama_file);
 
       if ($request->jalur == 1) {
            // import data
            Excel::import(new PendaftaranImport, public_path('/file_pendaftaran/'.$nama_file));
        } else if($request->jalur == 2) {
            // import data
            Excel::import(new PendaftaranImportSbmptn, public_path('/file_pendaftaran/'.$nama_file));

        }
 
        // notifikasi dengan session
        Session::flash('sukses','Data Pendaftaran Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('/pendaftaran');
    } 

      public function downloadTemplateSnmptn()
    {
        $snmptnTemplate = base_path("resources/views/template/snmptn.xlsx");
        return response()->download($snmptnTemplate);
    }
}
