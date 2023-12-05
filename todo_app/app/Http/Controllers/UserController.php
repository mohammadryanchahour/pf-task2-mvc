<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        // Implement logic to store a new user
    }

    public function update(Request $request, $id)
    {
        // Implement logic to update a specific user based on $id
    }

    public function destroy($id)
    {
        // Implement logic to delete a specific user based on $id
    }
}

