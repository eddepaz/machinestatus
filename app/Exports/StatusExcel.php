<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class StatusExcel implements FromView
{

    protected $recordStatusDB;

    public function __construct($recordStatusDB)
    {
        $this->recordStatusDB = $recordStatusDB['recordStatusDB'];
    }

    public function view(): View
    {
        return view('ExcelStatus', [
            'recordStatusDB' => $this->recordStatusDB
        ]);
    }
}
