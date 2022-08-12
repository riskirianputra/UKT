<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Jenisfile;

class JenisfileController extends Controller
{
    
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index()
    {
        $datas = Jenisfile::get();
        return view('jenisfile.index', compact('datas'));
    }

    
    public function create()
    {
          return view('jenisfile.create');
    }

   
    public function store(Request $request)
    {
        $jenisfile = Jenisfile::create([
                'nama_dokumen' => $request->get('nama_dokumen'),
                'keterangan' => $request->get('keterangan'),
                
            ]);      
        return redirect()->route('jenisfile.index');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
