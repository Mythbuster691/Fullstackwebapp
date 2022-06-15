<?php

namespace App\Exports;

use App\Models\Career;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CareersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Career::all()->orderBy('interview_destination', 'ASC');;

    }
    public function headings(): array{
        return [
        'Id',
        'Name',
        'Fathers name',
        'D.O.B',
        'Email',
        'District',
        'Center',
        'Jobpost',
        'orderidrazor',
        'Pdf',
        'Application Id',
        'Slotdate',
        'Slottime',
        'orderidrazor',
        'PaymentId',
        'application status',
        'User_createdAt',
        'User_updatedAt',

        ];


    }
}
