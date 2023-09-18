<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name = "Dylan") {
        $data = [
            "name" => $name,
            "date" => date("Y/m/d")
        ];

        return view('home', compact('data'));
    }
}
