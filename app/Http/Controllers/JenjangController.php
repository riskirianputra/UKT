<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use DB;
use App\Jenjang;

class JenjangController extends Controller
{
    
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index()
    {
        $datas = Jenjang::get();
        $jenjang = Jenjang::get();
        return view('jenjang.index', compact('datas','jenjang'));
    }

  
    public function create()
    {
        return view('jenjang.create');
    }

   
    public function store(Request $request)
    {
       Jenjang::create($request->all());

      
        return redirect()->route('jenjang.index');
    }

   
    public function show($id)
    {
        //
    }

    
     public function edit($id)
    {
      
        $data = Jenjang::findOrFail($id);

        return view('jenjang.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        Jenjang::find($id)->update($request->all());

       
        return redirect()->to('jenjang');
    }

  
    public function destroy($id)
    {
        Jenjang::find($id)->delete();
       
        return redirect()->route('jenjang.index');
    }
    
}
