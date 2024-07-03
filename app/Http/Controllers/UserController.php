<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Display a listing of the users
    public function index()
    {
        return view('user.dashboard');
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('users.create');
    }

    // Store a newly created user in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:50',
            'password' => 'required|min:6',
            'email' => 'required|unique:users|max:100',
            'full_name' => 'required|max:100',
            'role' => 'required|in:admin,guru,user',
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'email' => $request->get('email'),
            'full_name' => $request->get('full_name'),
            'role' => $request->get('role'),
        ]);

        $user->save();

        return redirect('/users')->with('success', 'User created!');
    }

    // Display the specified user
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    // Update the specified user in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|required|max:255',
            'username' => 'sometimes|required|unique:users,username,' . $id . '|max:50',
            'password' => 'sometimes|required|min:6',
            'email' => 'sometimes|required|unique:users,email,' . $id . '|max:100',
            'full_name' => 'sometimes|required|max:100',
            'role' => 'sometimes|required|in:admin,guru,user',
        ]);

        $user = User::find($id);
        $user->name = $request->get('name', $user->name);
        $user->username = $request->get('username', $user->username);
        if ($request->has('password')) {
            $user->password = Hash::make($request->get('password'));
        }
        $user->email = $request->get('email', $user->email);
        $user->full_name = $request->get('full_name', $user->full_name);
        $user->role = $request->get('role', $user->role);

        $user->save();

        return redirect('/users')->with('success', 'User updated!');
    }

    // Remove the specified user from storage
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'User deleted!');
    }
}
