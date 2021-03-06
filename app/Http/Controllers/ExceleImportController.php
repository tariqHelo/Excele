<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use DB;
use App\Models\ExcelImport;
use App\User;
use Session;
use Hash;
use Auth;
use Image;
use Carbon\Carbon;

class ExceleImportController extends Controller
{ 
    
    public function index()
     {
       $data = DB::table('all__b_e_c_s')->orderBy('id', 'ASC')->get();
      // dd($data);

       return view('excele.All_BEC')->with('data' ,$data);

     }

     public function import(Request $request)
     {  ///dd(20);
        $this->validate($request, [
        'select_file' => 'required|mimes:xls,xlsx'
        ],
        [
        'select_file.required' => __('.'),
        ]);
        $file = $request->select_file;
        Excel::import(new ExcelImport ,$file);
        return redirect()->back();
     }

}
