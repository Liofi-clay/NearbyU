<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;


class RoleController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role' => 'required|string|max:20|unique:roles,role',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $role = Role::create([
            'role' => $request->role,
        ]);

        return response()->json(['message' => 'Role created successfully', 'role' => $role], 201);
    }

    public function getAll()
    {
        $roles = Role::all();
        return response()->json($roles, 200);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);

        if (!$role) {
            return response()->json(['error' => 'Role not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'role' => 'required|string|max:20|unique:roles,role,' . $id,
            'role' => 'required|string|max:20|unique:roles,role,' . $id,
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $role->role = $request->role;
        $role->save();

        return response()->json(['message' => 'Role updated successfully', 'role' => $role], 200);
    }

    public function delete($id)
    {
        $role = Role::find($id);

        if (!$role) {
            return response()->json(['error' => 'Role not found'], 404);
        }

        $role->delete();

        return response()->json(['message' => 'Role deleted successfully'], 200);
    }
}
