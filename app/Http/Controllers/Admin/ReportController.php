<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use App\Models\Group;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    // public function __construct(){
    //     $this->middleware('can:admin.reports.index')->only('index');
    //     $this->middleware('can:admin.reports.create');
    //     $this->middleware('can:admin.reports.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.reports.destroy');

    // }
   
    public function index()
    {
        return view('admin.reports.index');
    }

    
    public function create()
    {
        $users = User::pluck('name', 'id');
        $groups = Group::pluck('name','id');
        return view('admin.reports.create', compact('users', 'groups'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required',
            'fecha' => 'required'
        ]);

        $report = Report::create($request->all());

        return redirect()->route('admin.reports.edit', $report)->with('info', 'El Reporte se agregó con éxito');

    }

    public function edit(Report $report)
    {
        $users = User::pluck('name', 'id');
        $groups = Group::pluck('name', 'id');
        return view('admin.reports.edit', compact('report', 'users', 'groups'));
    }

 
    public function update(Request $request, Report $report)
    {
        $report->update($request->all());

        return redirect()->route('admin.reports.edit', $report)->with('info', 'El Reporte se actualizó con éxito');
    }

   
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('admin.reports.index', $report)->with('info', 'El Reporte se eliminó con éxito');

    }

    public function show(Report $report)
    {
        $users = User::pluck('name', 'id');
        $groups = Group::pluck('name', 'id');
        return view('admin.reports.show', compact('report', 'users', 'groups'));
    }

    public function makeReport(){
    
        
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
             $report->ofrenda_ninos += $reportss->ofrenda_ninos;
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
        return view('admin.reports.make-report', compact('report'));
    }

    public function downloadPDF(){
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
             $report->ofrenda_ninos += $reportss->ofrenda_ninos;
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

        $data = [
          'felipes' => $report->felipes,
          'discipulos' => $report->discipulos,
          'ninos' => $report->ninos,
          'ausentes' => $report->ausentes,
          'amigos' => $report->amigos,
          'domingo_hermanos' => $report->domingo_hermanos,
          'domingo_amigos' => $report->domingo_amigos,
          'domingo_ninos' => $report->domingo_ninos,
          'ofrenda' => $report->ofrenda,
          'ofrenda_ninos' => $report->ofrenda_ninos,
          'vea' => $report->vea,
          'discipulado_uno' => $report->discipulado_uno,
          'discipulado_dos' => $report->discipulado_dos,
          'mision_amigo' => $report->mision_amigo,
          'consolidacion' => $report->consolidacion,
          'convertidos_adultos' => $report->convertidos_adultos,
          'convertidos_ninos' => $report->convertidos_ninos,
          'reconciliaciones' => $report->reconciliaciones,
          'liderazgo' => $report->liderazgo
        ];
        $pdf = PDF::loadView('admin.reports.partials.make-report', $data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('reporte-semanal.pdf');
    }

    public function makeExcel(){
        return Excel::download(new ReportsExport, 'reporte-semanal.xlsx');
    }
}
