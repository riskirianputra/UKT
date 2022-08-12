<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Bobot;
use App\User;
use App\Pendaftaran;
use App\Mahasiswa;
use PDF;

class BobotController extends Controller
{
    
    public function index()
    {          

        if(Auth::user()->hasrole('Mahasiswa'))
        {   
            $users = Auth::User()->id;
            $mahasiswa = Mahasiswa::where('user_id', Auth::id())->get();                  
            $datas = Bobot::where('mahasiswa_id', $mahasiswa[0]->id)->get();
                              
        } else {
            $bobot = Bobot::all();
            $datas = bobot::all();
            $mahasiswa = Mahasiswa::all();
            $user = User::all();
        }            
     
        return view('bobot.index', compact('datas','user','mahasiswa','bobot'));
    }
   
    public function create()
    {
        return view('bobot.create');
    }
  
    public function store(Request $request)
    {       
        return redirect()->route('bobot.index');
    }
 
    public function show($id)
    {
        $bobot = Bobot::findOrFail($id);

        return view('bobot.show', compact('bobot'));
    }

    public function destroy($id)
    {
        Bobot::find($id)->delete();        
        return redirect()->route('bobot.index');
    }

    public function cetak_pdf(Request $request)
    {   

        if(Auth::user()->hasrole('Mahasiswa'))
        {   
            $users = Auth::User()->id;
            $mahasiswa = Mahasiswa::where('user_id', Auth::id())->get();                  
            $bobot = Bobot::where('mahasiswa_id', $mahasiswa[0]->id)->get();
            $pendaftaran = Pendaftaran::where('user_id', Auth::id())->get();
                              
        } else {
            if ($request->has('mahasiswa_id')) {
                $mahasiswa_id = $request->mahasiswa_id;
                $bobot = Bobot::where('mahasiswa_id', $mahasiswa_id)->get();
                $pendaftaran = Pendaftaran::get();
                $mahasiswa = Mahasiswa::get();
            } else {
                $bobot = Bobot::all();
            }
        }

         // $pendaftaran = Pendaftaran::get($id);
         // $mahasiswa = Mahasiswa::get($id);

        $pdf = PDF::loadview('bobot.cetak',compact('mahasiswa','bobot','users','pendaftaran'));

        //return $pdf->download();

        return $pdf->stream();
    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
        
    }
   
}
