<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('profile');
        // atau return response sesuai kebutuhan
    }
} 