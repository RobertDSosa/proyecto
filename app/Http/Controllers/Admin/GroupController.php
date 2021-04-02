<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;

class GroupController extends Controller
{
    // public function __construct(){
    //     $this->middleware('can:admin.groups.index')->only('index');
    //     $this->middleware('can:admin.groups.create');
    //     $this->middleware('can:admin.groups.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.groups.destroy');

    // }

    public function index()
    {
        return view('admin.groups.index');
    }

    public function create()
    {
        $users = User::pluck('name', 'id');
        return view('admin.groups.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:groups'
        ]);

        $group = Group::create($request->all());

        return redirect()->route('admin.groups.edit', $group)->with('info', 'El Grupo Bíblico se creó con éxito');
    }


    public function edit(Group $group)
    {
        $users = User::pluck('name', 'id');
        return view('admin.groups.edit', compact('group', 'users'));
    }

    public function update(Request $request, Group $group)
    {
        $group->update($request->all());

        return redirect()->route('admin.groups.edit', $group)->with('info', 'El Grupo bíblico se actualizó con éxito');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('admin.groups.index', $group)->with('info', 'El Grupo Bíblico se eliminó con éxito');
    }
}
