<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mahasiswa;
use App\Mahasiswa_entry;
use App\Kategory;
use App\Kategory_detail;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;

class Mahasiswa_entryController extends Controller
{
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
   }
   
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
         if(Auth::user()->hasrole('Mahasiswa'))
        {   
            $users = Auth::User()->id;
            $datas = Mahasiswa_entry::where('user_id', $users)->get();
                                                              
        } else {
            $datas = Mahasiswa_entry::all();
        }       
           
        return view('mahasiswa_entry.index', compact('datas','mahasiswa'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::get();            
        $kategory = Kategory::get();
        $kategory_detail = Kategory_detail::get();


        return view('mahasiswa_entry.create', compact('mahasiswa','kategory','kategory_detail'));
    }
  
    public function store(Request $request)
    {
        $mahasiswa_entry = Mahasiswa_entry::create([

        'user_id' => Auth::user()->id,                            
        'idKategory' => $request->get('idKategory'),
        'idKategory_detail' => $request->get('idKategory_detail')
        
        ]);
      
        return redirect()->route('mahasiswa_entry.index');
    }

   
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

 
    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
        Mahasiswa_entry::find($id)->delete();
        
        return redirect()->route('mahasiswa_entry.index');
    }
}
