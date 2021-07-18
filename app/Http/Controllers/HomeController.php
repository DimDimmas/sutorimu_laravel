<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anime;
use App\Models\Genre;
use App\Models\StatusList;
use App\Models\SeasonCate;
use App\Models\Update;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Index(){
        $a = DB::table('updates');
        $a->latest();
        $update = $a
            ->join('animes', 'animes.title_list', '=', 'updates.title_update')
            ->select('updates.*', 'animes.genre')
            ->paginate(10);
        $item = Genre::all();
        $season = SeasonCate::all()->sortBy('name');
        $seanime = Anime::all()->where('category', '=', 'Summer 2021');
        $movie = Anime::all()->where('type', '=', 'Movie');

        return view('page.home', [
            'update' => $update,
            'items' => $item,
            'cate' => $season,
            'seanime' => $seanime,
            'movie' => $movie
        ])
        ->with((request()->input('page', 1) - 1) * 10);
    }
}
