<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home
    public function index() {
        $title = 'Welcome to our online store';
        return view('pages.index')->with('title', $title);
    }

    // About
    public function about() {
        $title = 'About Us';
        return view('pages.about');
    }

    // Services
    public function services() {
        $title = 'Our Services';
        return view('pages.services');
    }

    // Contact
    public function contact() {
        $title = 'Contact Us';
        return view('pages.contact');
    }
}
