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
        DB::table('i_s_i_c_rev_4')->truncate();
        foreach($collection as $key => $value)
        {
           //  dd($value[0]);
            if($key > 0)
            {
                if($value[1] == null):
                    continue;
                endif;
                DB::table('i_s_i_c_rev_4')->insert([
                     'Code'              =>$value[0]
                    ,'Description'       =>$value[1]
                     ,'وصف'             =>$value[2]
                     ,'status'          =>$value[3]
                ]);
            }
        }
    }
}
