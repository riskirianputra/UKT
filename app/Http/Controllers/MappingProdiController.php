<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Jalur_masuk;
use App\MappingProdi;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class MappingProdiController extends Controller
{
   
    public function index()
    {
         $datas = MappingProdi::all();
        
           
        return view('mappingprodi.index', compact('datas'));
    }

    public function create()
    {
        $data = MappingProdi::all();
      
           
        return view('mappingprodi.create', compact('data'));
    }

    public function store(Request $request)
    {
        $mappingprodi = MappingProdi::create([
                
        'kodeProdiSnmptn' => $request->get('kodeProdiSnmptn'),              
        'kodeProdiSbmptn' => $request->get('kodeProdiSbmptn'),
        'namaProdi'   => $request->get('namaProdi'),
        'idprodisireg'   => $request->get('idprodisireg'),
            
        ]);

        return redirect()->route('mappingprodi.index');
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
