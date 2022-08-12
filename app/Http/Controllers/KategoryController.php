<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Kategory;
use App\Periode;

class KategoryController extends Controller
{
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
   }
   
    public function index()
    {
        $datas = Kategory::get();
        return view('kategory.index', compact('datas'));
    }

   
    public function create()
    {
        $periode = Periode::get();
        return view('kategory.create', compact('periode'));
    }
   
    public function store(Request $request)
    {
        $kategory = Kategory::create([
                'namaKategory' => $request->get('namaKategory'),
                'idPeriode' => $request->get('idPeriode'),
                
            ]);      
        return redirect()->route('kategory.index');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = Kategory::findOrFail($id);
       
        $periode = Periode::get();
        return view('kategory.edit', compact('data','periode'));
    }

    
    public function update(Request $request, $id)
    {
        Kategory::find($id)->update($request->all());

       
        return redirect()->to('kategory');
    }

    
    public function destroy($id)
    {
       Kategory::find($id)->delete();
        
        return redirect()->route('kategory.index');
    }
}
