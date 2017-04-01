<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Series;
use App\Season;
use App\Bookmark;

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

    public function store_series()
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $series = new Series();

        $series->name = request('name');
        $series->notes = request('notes');

        $series->save();

        return redirect('/');
    }

    public function store_season($data)
    {
        $season = new Season();

        $season = $data;

        $season->save();
    }

    public function store_bookmark($data)
    {
        $bookmark = new Bookmark();

        $bookmark = $data;

        $bookmark->save();
    }

    public function delete($id)
    {
        $series = Series::destroy($id);

        return redirect('/');
    }
}
