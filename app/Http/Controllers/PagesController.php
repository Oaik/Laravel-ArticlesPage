<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Blog Page";
        // return view('pages.index', compact('title'));
        return view('pages.index') -> with('title', $title);
    }
    public function about() {
        $title = "Blog Page";
        return view('pages.about') -> with('title', $title);
    }
    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['SEO', 'Web Design']
        ];
        return view('pages.services')->with($data);
    }
}
