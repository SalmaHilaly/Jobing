<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Hello welcome to Jobing!';
        //return view('pages.index', compact('title')); another way
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Our Services',
            'services' => ['Provide jobs for seekers', 'Help Company owners find suitable workers', 'Make it easier to Connect and Negotiate']
        );
        return view('pages.services')->with($data);
    }
}
