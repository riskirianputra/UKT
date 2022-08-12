<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Jenisbiaya;
class JenisbiayaController extends Controller
{
   
   
    public function __construct() {
     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index()
    {
         $datas = Jenisbiaya::get();
        return view('jenisbiaya.index', compact('datas'));
    }

    
    public function create()
    {
        return view('jenisbiaya.create');
    }

   
    public function store(Request $request)
    {
        Jenisbiaya::create($request->all());

       
        return redirect()->route('jenisbiaya.index');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
       
        $data = Jenisbiaya::findOrFail($id);

        return view('jenisbiaya.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        Jenisbiaya::find($id)->update($request->all());

       
        return redirect()->to('jenisbiaya');
    }

   
    public function destroy($id)
    {
        Jenisbiaya::find($id)->delete();
       
        return redirect()->route('jenisbiaya.index');
    }
}
