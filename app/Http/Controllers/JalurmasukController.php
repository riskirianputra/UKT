<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahasiswa;
use App\Jalur_masuk;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;


class JalurmasukController extends Controller
{
    
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index()
    {
        $datas = Jalur_masuk::get();
        return view('jalur_masuk.index', compact('datas'));
    }

    
    public function create()
    {
          return view('jalur_masuk.create');
    }

    public function store(Request $request)
    {
       Jalur_masuk::create($request->all());

        
        return redirect()->route('jalur_masuk.index');
    }

   
    public function show($id)
    {
        $data = Jalur_masuk::findOrFail($id);

        return view('jalur_masuk.show', compact('data')); 
    }

   
    public function edit($id)
    {
        $data = Jalur_masuk::findOrFail($id);
       
        return view('jalur_masuk.edit', compact('data'));
    }

  
    public function update(Request $request, $id)
    {
       Jalur_masuk::find($id)->update($request->all());

        
        return redirect()->to('jalur_masuk');
    }

    
    public function destroy($id)
    {
        Jalur_masuk::find($id)->delete();
        
        return redirect()->route('jalur_masuk.index');
    }
}
