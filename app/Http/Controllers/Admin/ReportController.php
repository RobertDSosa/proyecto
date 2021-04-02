<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use App\Models\Group;

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
        
        $reports = Report::pluck('felipes');
        $rgroup = new Report;
        foreach ($reports as $report){
            $rgroup->felipes += $report->felipes;
        }
        return view('admin.reports.make-report', compact('rgroup'));
    }
}
