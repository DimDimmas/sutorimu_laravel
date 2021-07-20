<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Update;

class DetailController extends Controller
{
    public function index($title_list){
        $item = Anime::where('title_list', $title_list)
                ->firstOrFail();
        $ep = Update::all()->where('title_update', '=', $title_list);
        return view('page.anime', [
            'items' => $item,
            'ep' => $ep
        ]);
    }
}
