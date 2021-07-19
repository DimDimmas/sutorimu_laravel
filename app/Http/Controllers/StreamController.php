<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class StreamController extends Controller
{
    public function index($id)
    {
        $item = Update::with(['anime'])->findOrFail($id);
        $ep = Update::all()->where('title_update', '=', $item->title_update);
        return view('page.stream', [
            'items' => $item,
            'ep' => $ep
        ]);
    }
}
