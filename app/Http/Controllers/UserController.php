<?php


namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();  // Tüm kullanıcıları çekiyoruz
        return view('admin.user', compact('users'));
    }
}
