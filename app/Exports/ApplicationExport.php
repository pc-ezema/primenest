<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\application_history;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicationExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return application_history::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'SURNAME',
            'OTHER NAMES',
            'PHONE NUMBER',
            'PROPERTY TYPE',
            'PAYMENT OPTION',
            'CREATED_AT',
            'UPDATED_AT',
            'LOCATION',
        ];
    }
}
