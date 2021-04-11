<?php

namespace App\Exports;

use App\Models\Report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class ReportsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        $reports = Report::all();
        $report = New Report;
        foreach ($reports as $reportss){
             $report->felipes += $reportss->felipes;
             $report->discipulos += $reportss->discipulos;
             $report->ninos += $reportss->ninos;
             $report->ausentes += $reportss->ausentes;
             $report->amigos += $reportss->amigos;
             $report->domingo_hermanos += $reportss->domingo_hermanos;
             $report->domingo_amigos += $reportss->domingo_amigos;
             $report->domingo_ninos += $reportss->domingo_ninos;
             $report->ofrenda += $reportss->ofrenda;
             $report->vea += $reportss->vea;
             $report->discipulado_uno += $reportss->discipulado_uno;
             $report->discipulado_dos += $reportss->discipulado_dos;
             $report->mision_amigo += $reportss->mision_amigo;
             $report->consolidacion += $reportss->consolidacion;
             $report->convertidos_adultos += $reportss->convertidos_adultos;
             $report->convertidos_ninos += $reportss->convertidos_ninos;
             $report->reconciliaciones += $reportss->reconciliaciones;
             $report->liderazgo += $reportss->liderazgo;
        }
        return view('admin.reports.partials.make-excel', compact('report'));
    }
    
}
