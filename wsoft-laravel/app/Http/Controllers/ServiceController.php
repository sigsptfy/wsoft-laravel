<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Logic to retrieve data for the services view can be added here
        return view('pages.services.services');
    }
}
