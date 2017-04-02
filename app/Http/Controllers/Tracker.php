<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Series;
use App\Season;
use App\Bookmark;
use App\User;
use \Auth;

class Tracker extends Controller
{
    public function show()
    {
        if (Auth::check())
        {
            $user_id = Auth::user()->id;

            $series = DB::table('bookmark')
                ->join('series', 'series.id', '=', 'bookmark.series_id')
                ->where('bookmark.user_id', '=', $user_id)
                ->select('series.name', 'bookmark.*')
                ->get();
        }

        return view('welcome', compact('series'));
    }

    public function show_series_form()
    {
        return view('series_form');
    }

    public function show_all_series()
    {
        $series = DB::table('series')->get();

        return view('allseries', compact('series'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $series = new Series();
        $series->name = request('name');
        $series->save();

        $bookmark = new Bookmark();
        $bookmark->notes = request('notes');
        $bookmark->series_id = $series->id;
        $bookmark->user_id = Auth::user()->id;
        $bookmark->save();

        return redirect('/');
    }

    public function delete($series_id)
    {
        $user_id = Auth::user()->id;

        Bookmark::where('series_id', '=', $series_id)
            ->where('user_id', '=', $user_id)
            ->delete();

        return redirect('/');
    }
}
