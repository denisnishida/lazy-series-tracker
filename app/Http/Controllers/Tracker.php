<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tracker extends Controller
{
    public function show()
    {
        $characters = [
            'Jon Snow' => 'Kit Harington',
            'Melisandre' => 'Carice van Houten',
            'Ramsay Bolton' => 'Iwan Rheon'
        ];

        return view('welcome')->withCharacters($characters);
    }
}
