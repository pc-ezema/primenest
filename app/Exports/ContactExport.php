<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Contact;

class ContactExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return
         Contact::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'FULL NAME',
            'EMAIL',
            'PHONE NUMBER',
            'MESSAGE',
            'LOCATION',
            'CREATED_AT',
            'UPDATED_AT',
            
        ];
    }


}
