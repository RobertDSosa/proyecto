<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Group;

use Livewire\WithPagination;

class GroupsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        return $this->resetPage();
    }
    public function render()
    {

        //Esto es para recoger el listado de un solo usuario
        $groups = Group::where('user_id', auth()->user()->id)->paginate();

        return view('livewire.admin.groups-index', compact('groups'));
    }
}
