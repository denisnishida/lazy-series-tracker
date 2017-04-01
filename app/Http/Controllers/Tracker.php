<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Series;
use \App\Season;
use \App\Bookmark;

class Tracker extends Controller
{
    public function show()
    {
        $series = Series::all();

        return view('welcome', compact('series'));
    }

    public function show_series_form()
    {
        return view('series_form');
    }

    {
        $series = new Series();

        $series->name = $data->name;
        $series->notes = $data->notes;

        $series->save();
    }

    {
        $season = new Season();

        $season = $data;

        $season->save();
    }

    {
        $bookmark = new Bookmark();

        $bookmark = $data;

        $bookmark->save();
    }
}
