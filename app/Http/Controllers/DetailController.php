<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class DetailController extends Controller
{
    public function index($id){
        $item = Anime::where('id', $id)
                ->firstOrFail();
            return view();
    }
}
