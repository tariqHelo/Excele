<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class ExcelImport5 implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {//dd(40);
        DB::table('nice_classification')->truncate();
        foreach($collection as $key => $value)
        {
           // dd($value[0]);
            if($key > 0)
            {
                if($value[1] == null):
                    continue;
                endif;
                DB::table('nice_classification')->insert([
                     'Class'    =>$value[0]
                     ,'BasicNo' =>$value[1]
                     ,'EN'      =>$value[2]
                ]);
            }
        }
    }
}
