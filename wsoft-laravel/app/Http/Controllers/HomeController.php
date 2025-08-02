<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        // Logic to retrieve data for the home view can be added here
        return view('pages.home.home');
    }
}
