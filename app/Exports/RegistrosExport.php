<?php

namespace App\Exports;

use App\Models\Registro;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegistrosExport implements FromView
{
    protected $registros;

    public function __construct($registros)
    {
        $this->registros = $registros;
    }

    public function view(): View
    {
        return view('exports.registros', [
            'registros' => $this->registros
        ]);
    }
}

