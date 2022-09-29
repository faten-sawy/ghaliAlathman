<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class NotesExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('notes')
            ->select('id', 'name_ar', 'name_en', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'name_ar',
            'name_en',
            'created_at '

        ];
    }
}