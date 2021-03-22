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
        DB::table('nice__classification')->truncate();
        foreach($collection as $key => $value)
        {
           //  dd($value[0]);
            if($key > 0)
            {
                if($value[1] == null):
                    continue;
                endif;
                DB::table('nice__classification')->insert([

                     'Class' =>$value[0]
                     ,'BasicNo' =>$value[1]
                    ,'EN-(11-2021)' =>$value[2]
                ]);
            }
        }
    }
}
