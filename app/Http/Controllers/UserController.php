<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.users', compact("users"));
        // dd($users);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {    }

    public function edit(User $user)
    {
    }

    public function update(User $user, Request $request)
    {
    }

    public function destroy(User $user)
    {
    }
}
