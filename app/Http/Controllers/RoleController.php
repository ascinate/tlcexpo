<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $data = Role::all();
        return view('admin/roles', ['data' => $data]);
    }

    public function showData($id)
    {
        $data = Role::find($id);
        return view('admin/editrole', ['data' => $data]);
    }

    public function insertrole(Request $request)
    {
        $role = new Role();
        $role->role_name = $request->role_name;

        $role->save();
        return redirect('admin/roles');
    }

    public function updaterole(Request $request)
    {
        $role = Role::find($request->id);
        $role->role_name = $request->role_name;

        $role->save();
        return redirect('admin/roles');
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect('admin/roles');
    }
}
