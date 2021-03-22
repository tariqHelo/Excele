<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use DB;
use App\Models\ExcelImport4;
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
       $data = DB::table('i_s_i_c_rev_4')->orderBy('id', 'ASC')->get();
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
        Excel::import(new ExcelImport4 ,$file);
        return redirect()->route('excel');
     }

}
