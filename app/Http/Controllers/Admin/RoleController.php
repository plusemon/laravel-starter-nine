<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data['roles'] = Role::all();
        return view('admin.manage-access.roles', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:roles,name'],
        ]);

        Role::create($request->only('name'));
        return back();
    }

    public function show(Role $role)
    {
        //
    }

    public function edit(Role $role)
    {
        //
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => ['required', 'unique:roles,name,' . $role->id],
        ]);

        $role->update($request->only('name'));
        return back();
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
