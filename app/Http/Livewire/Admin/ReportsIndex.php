<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Report;

use Livewire\WithPagination;

class ReportsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        return $this->resetPage();
    }
    public function render()
    {
        $reports = Report::paginate(10);

        return view('livewire.admin.reports-index', compact('reports'));
    }
}
