<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        // Only admin can access this page
        if (!Auth::user()->isAdmin()) {
            return redirect('/')->with('error', 'You do not have permission to access this page.');
        }

        $users = User::with('role')->get();
        $roles = Role::all();

        return view('admin.users.index', compact('users', 'roles'));
    }

    /**
     * Update the user's role.
     */
    public function updateRole(Request $request, User $user)
    {
        // Only admin can update roles
        if (!Auth::user()->isAdmin()) {
            return redirect('/')->with('error', 'You do not have permission to perform this action.');
        }

        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->update([
            'role_id' => $request->role_id,
        ]);

        return redirect()->back()->with('success', 'User role updated successfully.');
    }

    /**
     * Approve a user as manager.
     */
    public function approveManager(User $user)
    {
        // Only admin can approve managers
        if (!Auth::user()->isAdmin()) {
            return redirect('/')->with('error', 'You do not have permission to perform this action.');
        }

        $managerRole = Role::where('name', 'manager')->first();

        if (!$managerRole) {
            return redirect()->back()->with('error', 'Manager role not found.');
        }

        $user->update([
            'role_id' => $managerRole->id,
        ]);

        return redirect()->back()->with('success', 'User approved as manager successfully.');
    }
}
