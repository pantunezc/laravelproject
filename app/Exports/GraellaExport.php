<?php

namespace App\Exports;


use App\Graella;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;

class GraellaExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    

    public function view(): View
    {
        return view('graelles.pdf', [
            'graelles' => Graella::all()
        ]);
    }
}
