<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class EducationExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('education')

            ->select('id','name_ar','name_en','description_ar','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'name_ar',
            'name_en',
            'description_ar',
            'created_at '

        ];
    }
}
