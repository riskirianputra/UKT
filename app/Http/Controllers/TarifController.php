<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tarif;
use App\Programstudi;
use App\Periode;
use App\Jenisbiaya;
use App\Jalur_masuk;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class TarifController extends Controller
{

    
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index()
    {
        
        $datas = Tarif::get();       
        return view('tarif.index', compact('datas'));
    }

  
    public function create()
    {   

        $jenisbiaya = Jenisbiaya::get();
        $periode = Periode::get();
        $jalurmasuk = Jalur_masuk::get();
        $programstudi = Programstudi::get();
       
        return view('tarif.create', compact( 'jenisbiaya','jalurmasuk','programstudi','periode'));
    }

   
    public function store(Request $request)
    {
            Tarif::create($request->all());

        
        return redirect()->route('tarif.index');
    }

  
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
        $data = Tarif::findOrFail($id);
        $periode = Periode::get();
        $jalurmasuk = Jalur_masuk::get();
        $programstudi = Programstudi::get();
        $jenisbiaya = Jenisbiaya::get();

        return view('tarif.edit', compact('data','jalurmasuk','programstudi','jenisbiaya','periode'));
    }

   
    public function update(Request $request, $id)
    {
        Tarif::find($id)->update($request->all());

       
        return redirect()->to('tarif');
    }

  
    public function destroy($id)
    {
        Tarif::find($id)->delete();
       
        return redirect()->route('tarif.index');
    }
}
