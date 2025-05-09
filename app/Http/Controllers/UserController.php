<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return response()->json(User::all());
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required|in:admin,guru,murid',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        return response()->json($user, 201);
    }

    public function show(User $user) {
        return response()->json($user);
    }

    public function update(Request $request, User $user) {
        $validated = $request->validate([
            'username' => 'sometimes|unique:users,username,' . $user->id,
            'password' => 'sometimes',
            'role' => 'sometimes|in:admin,guru,murid',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }

        $user->update($validated);
        return response()->json($user);
    }

    public function destroy(User $user) {
        $user->delete();
        return response()->json(null, 204);
    }
}
