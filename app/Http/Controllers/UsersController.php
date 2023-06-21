<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {

        return Inertia::render('Users/Index', [
            //'users' => User::paginate(10)
            'users' => User::paginate(10)->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
            ])
        ]);
    }
}
