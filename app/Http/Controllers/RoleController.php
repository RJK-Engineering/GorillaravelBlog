<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('role.index', compact('roles', 'permissions'));
    }

    public function store(Request $request) {
        $this->validate($request, ['name' => 'required|unique:roles']);

        if (Role::create($request->only('name')) ) {
            flash('Role Added');
        }

        return back();
    }

    public function update(Request $request, $id) {
        if ($role = Role::findOrFail($id)) {
            // admin role has everything
            if ($role->name === 'Admin') {
                $role->syncPermissions(Permission::all());
                return route('roles.index');
            }

            $permissions = $request->get('permissions', []);
            $role->syncPermissions($permissions);
            flash( $role->name . ' permissions has been updated.');
        } else {
            flash()->error( 'Role with id '. $id .' note found.');
        }

        return route('roles.index');
    }

}
