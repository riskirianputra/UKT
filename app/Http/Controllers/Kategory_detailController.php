<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Kategory;
use App\Kategory_detail;
use App\Periode;

class Kategory_detailController extends Controller
{
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
   }
   
    public function index()
    {
        
        $datas = Kategory_detail::get();
        return view('kategory_detail.index', compact('datas'));
    }

   
    public function create()
    {
        $kategory = Kategory::get();
        return view('kategory_detail.create', compact('kategory'));
    }

    
    public function store(Request $request)
    {
        $kategory_detail = kategory_detail::create([

                'idKategory' => $request->get('idKategory'),
                'isiKategory' => $request->get('isiKategory'),
                'poin' => $request->get('poin'),
                                
            ]);      
        return redirect()->route('kategory_detail.index');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $data = Kategory_detail::findOrFail($id);
       
        $kategory = Kategory::get();
        return view('kategory_detail.edit', compact('data','kategory'));
    }

   
    public function update(Request $request, $id)
    {
        Kategory_detail::find($id)->update($request->all());

       
        return redirect()->to('kategory_detail');
    }

  
    public function destroy($id)
    {
       Kategory_detail::find($id)->delete();
        
        return redirect()->route('kategory_detail.index');
    }
}
