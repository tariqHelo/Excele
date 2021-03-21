<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        DB::table('all__b_e_c_s')->truncate();
        foreach($collection as $key => $value)
        {
           //  dd($value[0]);
            if($key > 0)
            {
                if($value[1] == null):
                    continue;
                endif;
                DB::table('all__b_e_c_s')->insert([
                    //'id'	    =>$value[0]
                     'Classification'   =>$value[0]
                     ,'Code'            =>$value[1]
                    ,'Description'      =>$value[2]
                     ,'ParentCode'      =>$value[3]
                     ,'Level'           =>$value[4]
                     ,'IsBasicLevel'    =>$value[5]
                ]);
            }
        }
    }
}
