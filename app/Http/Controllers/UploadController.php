<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Uploadfile;
use App\User;
use App\Jenisfile;
use App\Jalur_masuk;
use App\Pendaftaran;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;

class UploadController extends Controller
{   

    // public function __construct() {
    //  $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    // }

    public function index()
    {   
        
           if(Auth::user()->hasrole('Mahasiswa'))
        {   
            $user = Auth::user()->id;
            $datas = Uploadfile::with(['user', 'jenis_file'])->where('user_id', $user)->get();
                                                              
        } else {
            $datas = Uploadfile::all();
            $user = User::all();
           }

         $jenis_file = Jenisfile::get();
     
        return view('upload.index', compact('datas','user','jenis_file'));
    }

     public function create()
    {   
         $jenis_file = Jenisfile::WhereNotExists(function($query) {
                        $query->select(DB::raw(1))
                        ->from('upload_file')
                        ->whereRaw('upload.id_file = jenis_file.id');
                     })->get();
       
        $user = Auth::user()->id;
        return view('upload.create', compact( 'jenis_file','user'));
    }

    public function store(Request $request)
    {   

        $jalurmasuk = Jalur_masuk::get();
        $pendaftaran = Pendaftaran::get(); 

        $this->validate($request, [
            'file' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',           
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
 
            $nama_file ="2020"."_".$file->getClientOriginalName();
     
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->storeAs($tujuan_upload, $nama_file);
        }
        
        Uploadfile::create([
            'user_id' => Auth::user()->id,
            'id_file' => $request->id_file,  
            'tglUpload' => $request->tglUpload,
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);
 
        return redirect()->route('upload.index');

    }

      public function destroy($id)
    {
        Uploadfile::find($id)->delete();
        
        return redirect()->route('upload.index');
    }

     public function show($id)
        {
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
            
                return redirect()->to('/');
        }

        $data = Uploadfile::find($id);
        return response()->download(public_path('data_file/' . $data->file), $data->nama_file);       
    }

}
