<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anime;
use App\Models\Genre;

class HomeListController extends Controller
{
    //
    public function Index(){        
        $anime = Anime::orderBy('title_list')->where('type', '=', 'TV')->get();
        return view('page.list', [
            'anime' => $anime
            ]);
    }

    public function search(Request $request){
        $keyword = $request->search;
        $anime = Anime::where('title_list', 'like', "%" . $keyword . "%")->get();
        return view('page.list', [
            'anime' => $anime,
            'keyword' => $keyword
            ])->with(['success' => $keyword]);
    }
    
    public function genre($genre){
        $item = Anime::where('genre', 'like', "%" . $genre . "%")->get();
        return view('page.list', [
            'anime' => $item
            ])->with(['success' => $item]);
    }

    public function season($season){
        $item = Anime::where('category', 'like', "%" . $season . "%")->get();
        return view('page.list', [
            'anime' => $item
            ])->with(['success' => $item]);
    }
}
