<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use DB;
use App\Models\ExcelImport3;
use App\User;
use Session;
use Hash;
use Auth;
use Image;
use Carbon\Carbon;

class DropImportController3 extends Controller
{ 
    
    public function index()
     {
       $data = DB::table('c_p_c2_1_and__i_s_i_c__rev_and__h_s_2017')->orderBy('id', 'ASC')->get();
      // dd($data);

       return view('excele.CPC2_1')->with('data' ,$data);

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
        Excel::import(new ExcelImport3 ,$file);
        return redirect()->back();
     }

}
