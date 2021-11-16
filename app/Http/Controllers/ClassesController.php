<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index() {
        $title = "Welcome to classes list";

        // Compact Method
        // return view('classes.index', compact('title'));

        return view('classes.index')->with('title', $title);
    }
}
