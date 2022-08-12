<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Programstudi;
use App\Mahasiswa;
use App\Pendaftaran;
use App\Fakultas;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
class ProgramstudiController extends Controller
{   
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
   }
   
    public function index()
    {
         if(Auth::user()->level == 'user')
        {
            $datas = Programstudi::where('idFakultas', Auth::user()->fakultas->id)
                                ->get();
                              
        } else {
            $datas = Programstudi::get();
           
        }
       
        return view('programstudi.index', compact('datas'));
    }

   
    public function create()
    {
       
        $fakultas = Fakultas::get();
       
        return view('programstudi.create', compact( 'fakultas'));
    }

  
    public function store(Request $request)
    {
         Programstudi::create($request->all());

        
        return redirect()->route('programstudi.index');
    }

    
    public function show($id)
    {
        $fakultas = Fakultas::get();
        $data = Programstudi::findOrFail($id);

        return view('programstudi.show', compact('data','fakultas'));
    }

    public function edit($id)
    {
        $data = Programstudi::findOrFail($id);
        $fakultas = Fakultas::get();
      
        return view('programstudi.edit', compact('data', 'fakultas'));
    }

   
    public function update(Request $request, $id)
    {
        Programstudi::find($id)->update($request->all());

      
        return redirect()->to('programstudi');
    }

   
    public function destroy($id)
    {
        Programstudi::find($id)->delete();
        
        return redirect()->route('programstudi.index');
    }
}
