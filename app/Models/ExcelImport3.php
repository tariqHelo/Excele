<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class ExcelImport3 implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        DB::table('c_p_c2_1_and__i_s_i_c__rev_and__h_s_2017')->truncate();
        foreach($collection as $key => $value)
        {
           // dd($value[8]);
            if($key > 0)
            {
                if($value[1] == null):
                    continue;
                endif;
                DB::table('c_p_c2_1_and__i_s_i_c__rev_and__h_s_2017')->insert([
                     'HS2017'       =>$value[0]
                     ,'HSpartial'   =>$value[1]
                    ,'Description'  =>$value[2]
                     ,'CPCVer'      =>$value[3]
                     ,'CPCpartial'  =>$value[4]
                     ,'CPC21title'  =>$value[5]
                    ,'ISIC4code'    =>$value[6]
                    ,'ISIC4partial' =>$value[7]
                    ,'Desc'         =>$value[8]
                ]);
            }
        }
    }
}
