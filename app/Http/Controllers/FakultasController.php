<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
use Auth;
use Session;

class FakultasController extends Controller
{
    //  public function __construct() {
    //     $this->middleware(['auth', 'clearance'])->except('index', 'show');
    // }

    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }


      public function index()
    {
       $datas = Fakultas::get();
        return view('fakultas.index', compact('datas'));
    }

  
    public function create()
    {
      if(Auth::user()->level == 'user') {
           
            return redirect()->to('/');
        }
        return view('fakultas.create');
    }

   
    public function store(Request $request)
    {
      Fakultas::create([
            'namaFakultas' => $request->input('namaFakultas'),
            'idFakultasSia' => $request->input('idFakultasSia'),
            'dbFakultas' => $request->input('dbFakultas'),
            'urutanNim' => $request->input('urutanNim'),           
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('fakultas.index');
    }

   
    public function show($id)
    {
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
            
                return redirect()->to('/');
        }

        $data = Fakultas::findOrFail($id);

        return view('fakultas.show', compact('data'));
    }

   
    public function edit($id)
    {
       if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
               
                return redirect()->to('/');
        }

        $data = Fakultas::findOrFail($id);

        return view('fakultas.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        Fakultas::find($id)->update($request->all());

       
        return redirect()->to('fakultas');
    }

  
    public function destroy($id)
    {
        Fakultas::find($id)->delete();
       
        return redirect()->route('fakultas.index');
    }

}
