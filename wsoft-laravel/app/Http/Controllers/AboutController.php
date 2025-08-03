<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        // Logic to retrieve data for the about view can be added here
        return view('pages.about.aboutUs');
    }
    // Additional methods related to the About page can be added here
    // For example, a method to show team members or company history
    public function team()
    {
        return view('pages.about.ourTeam');
    }
}
