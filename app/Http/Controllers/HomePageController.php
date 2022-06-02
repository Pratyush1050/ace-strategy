<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::all();

        $countries = Country::all();

        return view('index', compact('heroSections', 'countries'));
        
    }
}
