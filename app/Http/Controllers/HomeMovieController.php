<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class HomeMovieController extends Controller
{
    //
    public function Index(){
        $anime = Anime::where('type', '=', 'Movie')->get();
        return view('page.list', [
            'anime' => $anime
            ]);
    }
}
