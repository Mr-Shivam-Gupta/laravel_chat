<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::whereNotIn('id', [auth()->user()->id]);
        return view('dashboard', compact('users'));
    }
}
