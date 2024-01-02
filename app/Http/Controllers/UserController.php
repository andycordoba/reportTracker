<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index() 
    {
    return Inertia::render('User');

    }


    public function all()
    {

    $users = User::get(['id', 'firstname', 'lastname', 'email']);

    return Inertia::render('User', [
        'users' => $users
    ]);
    }

}
