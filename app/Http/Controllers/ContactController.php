<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('pages.about.contact');
    }

    public function sendMail(Request $request) {
        return $request;
    }
}
