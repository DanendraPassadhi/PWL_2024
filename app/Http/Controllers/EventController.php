<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show()
    {
        return view('profile');
        // atau return response sesuai kebutuhan
    }
} 