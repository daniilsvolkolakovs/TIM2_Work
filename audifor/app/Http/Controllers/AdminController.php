<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
    $users = User::all();
    return view('admin.post_admin', compact('users'));
    }

    public function deleteUser(User $user)
    {
    $user->delete();
    return redirect()->back()->with('success', 'Пользователь успешно удален.');
    }
}
