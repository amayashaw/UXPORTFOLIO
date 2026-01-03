<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Home/default page - you can make this a welcome page or just redirect to Graphic Design
    public function index()
    {
        return view('welcome'); // Assuming you want a basic welcome page
    }

    public function graphicDesign()
    {
        return view('graphic-design');
    }

    public function webpageRedesign()
    {
        return view('webpage-redesign');
    }

    public function personalProjects()
    {
        return view('personal-projects');
    }

    public function contact()
    {
        return view('contact');
    }
}