<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Informasi;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class InfoController extends Controller
{
    public function index()
    {
       
        return view('info');
    }

}
