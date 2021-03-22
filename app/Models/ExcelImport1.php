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
        DB::table('h_s__s_i_t_c__b_e_c')->truncate();
        foreach($collection as $key => $value)
        {
           //  dd($value[0]);
            if($key > 0)
            {
                if($value[1] == null):
                    continue;
                endif;
                DB::table('h_s__s_i_t_c__b_e_c')->insert([
                    //'id'	    =>$value[0]
                      'HS92' =>$value[0]
                     ,'HS96' =>$value[1]
                     ,'HS02' =>$value[2]
                     ,'HS07' =>$value[3]
                     ,'HS12' =>$value[4]
                     ,'HS17' =>$value[5]
                    ,'HS144' =>$value[6]
                    ,'BEC4' =>$value[7]
                    ,'SITC1' =>$value[8]
                    ,'SITC2' =>$value[9]
                    ,'SITC3' =>$value[10]
                    ,'SITC4' =>$value[11]
                ]);
            }
        }
    }
}
