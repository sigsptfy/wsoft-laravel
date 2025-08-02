<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Logic for portfolio-related methods can be added here
    // For example, a method to show portfolio items or details
    public function index()
    {
        return view('pages.portfolio.portfolio');
    }


}
