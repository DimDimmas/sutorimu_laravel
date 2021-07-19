<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anime;

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
            'anime' => $anime
            ]);
    }
}
