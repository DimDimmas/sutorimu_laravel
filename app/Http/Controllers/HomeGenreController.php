<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Anime;

class HomeGenreController extends Controller
{
    //
    public function Index(){
        $genre = Genre::all();
        $anime = Anime::inRandomOrder()->limit(5)->get();
        return view('page.genre', [
            'items' => $genre,
            'anime' => $anime
        ]);
    }
}
