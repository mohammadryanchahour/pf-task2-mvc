<?php
namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }

    public function store(Request $request)
    {
        // Implement logic to store a new role
    }

    public function update(Request $request, $id)
    {
        // Implement logic to update a specific role based on $id
    }

    public function destroy($id)
    {
        // Implement logic to delete a specific role based on $id
    }
}
