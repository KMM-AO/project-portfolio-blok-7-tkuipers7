<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        $sections = Section::all();
        return view('welcome')->with('section_items', $sections);
    }
}
