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
        DB::table('c_p_c_rev_2_1_translation')->truncate();
        foreach($collection as $key => $value)
        {
           //  dd($value[0]);
            if($key > 0)
            {
                if($value[1] == null):
                    continue;
                endif;
                DB::table('c_p_c_rev_2_1_translation')->insert([
                    
                     'CPC21code'   =>$value[0]
                     ,'CPC21title' =>$value[1]
                    ,'العنوان'    =>$value[2]
                     ,'status'     =>$value[3]
                ]);
            }
        }
    }
}
