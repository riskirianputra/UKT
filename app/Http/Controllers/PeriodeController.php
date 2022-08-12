<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Periode;

class PeriodeController extends Controller
{


    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index()
    {
        $datas = Periode::get();
        
        return view('periode.index', compact('datas'));
    }

    public function create()
    {
         return view('periode.create');
    }

   
    public function store(Request $request)
    {
      
        $periode = Periode::create([
                'namaPeriode' => $request->get('namaPeriode'),
                'tglBuka' => $request->get('tglBuka'),
                'tglTutup' => $request->get('tglTutup'),
                'informasi' => $request->get('informasi'),                
                'status' => 'aktif'
            ]);      
        return redirect()->route('periode.index');
    }

 
    public function show($id)
    {
       $datas = Periode::get($id);
      
        return view('periode.index', compact('datas'));
    }

    
    public function edit($id)
    {
        $datas = Periode::findOrFail();
        return view('periode.index', compact('datas'));
    }

   
   
    public function update(Request $request, $id)
    {
        $periode = Periode::find($id);

        $periode->update([
                'status' => 'nonaktif'
                ]);

         return redirect()->route('periode.index');
    }

   
    public function destroy($id)
    {
        
        $periode = Periode::find($id)->delete();       
         return redirect()->route('periode.index');
    }
}
