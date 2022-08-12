<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Jalur_masuk;
use App\MappingJalur;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class MappingJalurController extends Controller
{
   
    public function index()
    {     
        $datas = MappingJalur::all();
        $jalur_masuk = Jalur_masuk::get();
           
        return view('mappingjalur.index', compact('jalur_masuk','datas'));
    }
  
    public function create()
    {
         
        $data = MappingJalur::all();
        $jalur_masuk = Jalur_masuk::get();

        return view('mappingjalur.create', compact('jalur_masuk','data'));
    }
  
    public function store(Request $request)
    {
        $mappingjalur = MappingJalur::create([
                
        'user_id' => $request->get('user_id'),              
        'idJalur' => $request->get('idJalur'),
        'level'   => $request->get('level'),
        'jalur'   => $request->get('jalur'),
            
        ]);

        
        return redirect()->route('mappingjalur.index');
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
