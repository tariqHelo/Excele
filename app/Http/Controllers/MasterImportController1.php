<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use DB;
use App\Models\ExcelImport1;
use App\User;
use Session;
use Hash;
use Auth;
use Image;
use Carbon\Carbon;

class MasterImportController1 extends Controller
{ 
    
    public function index()
     {
       $data = DB::table('h_s__s_i_t_c__b_e_c')->orderBy('id', 'ASC')->get();
      // dd($data);

       return view('excele.Complete')->with('data' ,$data);

     }

     public function import(Request $request)
     {  dd(20);
        $this->validate($request, [
        'select_file' => 'required|mimes:xls,xlsx'
        ],
        [
        'select_file.required' => __('.'),
        ]);
        $file = $request->select_file;
        Excel::import(new ExcelImport1 ,$file);
        return redirect()->back();
     }

}
