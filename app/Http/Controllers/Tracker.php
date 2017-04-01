<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Series;

class Tracker extends Controller
{
    public function show()
    {
        $series = Series::all();

        return view('welcome', compact('series'));
    }
}
