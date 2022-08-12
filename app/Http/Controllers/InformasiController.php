<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Informasi;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class InformasiController extends Controller
{
    
    // public function __construct() {
    //  $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    // }
    
    public function index()
    {
       $datas = Informasi::get();
        return view('informasi.index', compact('datas'));
    }

    
    public function create()
    {
        return view('informasi.create');
    }
   

    
    public function store(Request $request)
    {
        $informasi = Informasi::create([
               
                'isiInformasi' => $request->get('isiInformasi'),
                'pengunguman' => $request->get('pengunguman'),  
                'peringatan' => $request->get('peringatan'),   
                'periode' => $request->get('periode'),
               
            ]);      
        return redirect()->route('informasi.index');
    }

  
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $data = Informasi::findOrFail($id);
       
        return view('informasi.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        Informasi::find($id)->update($request->all());

        
        return redirect()->to('informasi');
    }

    
    public function destroy($id)
    {
      Informasi::find($id)->delete();
        
        return redirect()->route('informasi.index');
    }
}
