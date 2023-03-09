<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $properties = PostController::getAllProperties();
        $recent = PostController::getResentUploads();
        return view('pages.home.home', compact('properties', 'recent'));
    }
}
