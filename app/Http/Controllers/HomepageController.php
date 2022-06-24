<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        return view('user-side.homepage', compact('projects'));
    }
}
